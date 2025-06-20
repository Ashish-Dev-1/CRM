<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use PDO;

class ImportSqlCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:import-sql 
                            {file : Path to the SQL file to import} 
                            {--connection=default : Database connection to use}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import an SQL file into the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filePath = $this->argument('file');
        $connectionName = $this->option('connection') === 'default' 
            ? Config::get('database.default') 
            : $this->option('connection');

        if (!file_exists($filePath)) {
            $this->error("SQL file not found: {$filePath}");
            return 1;
        }

        $sqlContent = file_get_contents($filePath);
        if ($sqlContent === false) {
            $this->error("Cannot read SQL file: {$filePath}");
            return 1;
        }

        $this->info("Importing SQL file to {$connectionName} database...");

        try {
            $connection = DB::connection($connectionName);
            $driver = $connection->getDriverName();

            if ($driver === 'mysql') {
                return $this->importMysql($filePath, $connection);
            } elseif ($driver === 'sqlite') {
                return $this->importSqlite($sqlContent, $connection);
            } else {
                $this->error("Unsupported database driver: {$driver}");
                return 1;
            }
        } catch (\Exception $e) {
            $this->error("Error: " . $e->getMessage());
            return 1;
        }
    }

    /**
     * Import SQL to MySQL database using the mysql command line tool
     */
    private function importMysql(string $filePath, $connection)
    {
        $config = $connection->getConfig();
        
        $host = $config['host'];
        $port = $config['port'];
        $database = $config['database'];
        $username = $config['username'];
        $password = $config['password'];
        
        // Create temporary file for credentials
        $tmpFile = tempnam(sys_get_temp_dir(), 'mysql_');
        file_put_contents($tmpFile, "[client]\nuser={$username}\npassword={$password}\nhost={$host}\nport={$port}\n");
        
        // Build the command
        $command = "mysql --defaults-extra-file={$tmpFile} {$database} < \"{$filePath}\"";
        
        // Execute command
        $this->info("Executing MySQL import...");
        $output = [];
        $returnVar = 0;
        exec($command, $output, $returnVar);
        
        // Delete temporary credentials file
        unlink($tmpFile);
        
        if ($returnVar !== 0) {
            $this->error("MySQL import failed with code {$returnVar}");
            $this->error(implode("\n", $output));
            return 1;
        }
        
        $this->info("MySQL import completed successfully!");
        return 0;
    }

    /**
     * Import SQL to SQLite database using PDO
     */
    private function importSqlite(string $sqlContent, $connection)
    {
        $pdo = $connection->getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Start a transaction
        $pdo->beginTransaction();
        
        try {
            // Split the SQL by semicolons and execute each statement
            $statements = explode(';', $sqlContent);
            $successCount = 0;
            $totalCount = 0;
            
            $this->output->progressStart(count(array_filter($statements)));
            
            foreach ($statements as $statement) {
                $statement = trim($statement);
                if (!empty($statement)) {
                    $totalCount++;
                    try {
                        $pdo->exec($statement);
                        $successCount++;
                        $this->output->progressAdvance();
                    } catch (\PDOException $e) {
                        $this->output->progressFinish();
                        $this->error("Error executing statement: " . $e->getMessage());
                        $this->line("Statement: " . $statement);
                    }
                }
            }
            
            $this->output->progressFinish();
            
            // Commit the transaction if all statements were executed successfully
            if ($successCount === $totalCount) {
                $pdo->commit();
                $this->info("SQLite import completed: All {$successCount} statements executed successfully");
                return 0;
            } else {
                $pdo->rollBack();
                $this->warn("SQLite import incomplete: Only {$successCount} of {$totalCount} statements executed successfully");
                return 1;
            }
        } catch (\Exception $e) {
            $pdo->rollBack();
            $this->error("Error during import: " . $e->getMessage());
            return 1;
        }
    }
}
