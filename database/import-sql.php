<?php

/**
 * SQL Import Script
 * 
 * This script imports an SQL file into your database.
 * Usage: php database/import-sql.php path/to/your/file.sql [--mysql]
 * 
 * By default, it imports to the SQLite database.
 * Use --mysql flag to import to MySQL instead.
 */

require __DIR__.'/../vendor/autoload.php';

// Load environment variables
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// Get command line arguments
$arguments = $_SERVER['argv'];

if (count($arguments) < 2) {
    echo "Usage: php database/import-sql.php path/to/your/file.sql [--mysql]\n";
    echo "Add --mysql flag to import to MySQL instead of SQLite\n";
    exit(1);
}

$sqlFilePath = $arguments[1];
$useMysql = in_array('--mysql', $arguments);

if (!file_exists($sqlFilePath)) {
    echo "Error: SQL file not found: {$sqlFilePath}\n";
    exit(1);
}

$sqlContent = file_get_contents($sqlFilePath);

if ($sqlContent === false) {
    echo "Error: Cannot read SQL file: {$sqlFilePath}\n";
    exit(1);
}

try {
    if ($useMysql) {
        // MySQL import
        $dbConfig = config('database.connections.mysql');
        $host = $dbConfig['host'];
        $port = $dbConfig['port'];
        $database = $dbConfig['database'];
        $username = $dbConfig['username'];
        $password = $dbConfig['password'];
        
        echo "Importing SQL file to MySQL database: {$database}\n";
        
        // Create temporary file for credentials
        $tmpFile = tempnam(sys_get_temp_dir(), 'mysql_');
        file_put_contents($tmpFile, "[client]\nuser={$username}\npassword={$password}\nhost={$host}\nport={$port}\n");
        
        // Build the command
        $command = "mysql --defaults-extra-file={$tmpFile} {$database} < \"{$sqlFilePath}\"";
        
        // Execute command
        $output = [];
        $returnVar = 0;
        exec($command, $output, $returnVar);
        
        // Delete temporary credentials file
        unlink($tmpFile);
        
        if ($returnVar !== 0) {
            echo "Error: MySQL import failed with code {$returnVar}\n";
            echo implode("\n", $output);
            exit(1);
        }
        
        echo "MySQL import completed successfully!\n";
    } else {
        // SQLite import
        $dbConfig = config('database.connections.sqlite');
        $databasePath = $dbConfig['database'];
        
        echo "Importing SQL file to SQLite database: {$databasePath}\n";
        
        // Use PDO for SQLite
        $pdo = new PDO("sqlite:{$databasePath}");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Split the SQL by semicolons and execute each statement
        $statements = explode(';', $sqlContent);
        $successCount = 0;
        $totalCount = 0;
        
        foreach ($statements as $statement) {
            $statement = trim($statement);
            if (!empty($statement)) {
                $totalCount++;
                try {
                    $pdo->exec($statement);
                    $successCount++;
                } catch (PDOException $e) {
                    echo "Error executing statement: " . $e->getMessage() . "\n";
                    echo "Statement: " . $statement . "\n";
                }
            }
        }
        
        echo "SQLite import completed: {$successCount} of {$totalCount} statements executed successfully\n";
    }
    
    echo "Import process completed.\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    exit(1);
}
