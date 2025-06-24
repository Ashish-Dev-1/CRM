<?php

/**
 * Propsyst Data Import Script
 * 
 * This script imports the propsyst_main_data_only.sql file into your database
 * using Laravel's database connection. Processes file line by line to avoid memory issues.
 */

require __DIR__.'/vendor/autoload.php';

// Load environment variables
$app = require __DIR__.'/bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$sqlFilePath = __DIR__ . '/public/propsyst_main_data_only.sql';

if (!file_exists($sqlFilePath)) {
    echo "Error: SQL file not found: {$sqlFilePath}\n";
    exit(1);
}

echo "Reading SQL file: {$sqlFilePath}\n";

try {
    // Get the database connection
    $connection = DB::connection();
    
    echo "Connected to database: " . config('database.default') . "\n";
    echo "Database: " . config('database.connections.' . config('database.default') . '.database') . "\n";
    
    $successCount = 0;
    $totalCount = 0;
    $errorCount = 0;
    $currentStatement = '';
    
    echo "Starting import...\n";
    
    // Process file line by line
    $handle = fopen($sqlFilePath, 'r');
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $line = trim($line);
            
            // Skip empty lines and comments
            if (empty($line) || preg_match('/^--/', $line) || preg_match('/^\/\*/', $line)) {
                continue;
            }
            
            // Add line to current statement
            $currentStatement .= $line . ' ';
            
            // If line ends with semicolon, execute the statement
            if (substr($line, -1) === ';') {
                $totalCount++;
                try {
                    $connection->unprepared($currentStatement);
                    $successCount++;
                    if ($totalCount % 50 == 0) {
                        echo "Processed {$totalCount} statements...\n";
                    }
                } catch (Exception $e) {
                    $errorCount++;
                    echo "Error executing statement #{$totalCount}: " . $e->getMessage() . "\n";
                    echo "Statement: " . substr($currentStatement, 0, 100) . "...\n";
                    // Continue with next statement
                }
                
                // Reset current statement
                $currentStatement = '';
            }
        }
        fclose($handle);
    }
    
    echo "\nImport completed!\n";
    echo "Total statements: {$totalCount}\n";
    echo "Successful: {$successCount}\n";
    echo "Errors: {$errorCount}\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    exit(1);
} 