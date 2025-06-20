@echo off
REM SQL Import Script for Windows
REM 
REM This script helps import an SQL file into your database
REM Usage: import-sql.bat path/to/your/file.sql [--mysql]

setlocal enabledelayedexpansion

REM Check if a file path was provided
if "%~1"=="" (
    echo Error: Please provide the path to the SQL file.
    echo Usage: import-sql.bat path/to/your/file.sql [--mysql]
    exit /b 1
)

REM Check if the file exists
if not exist "%~1" (
    echo Error: SQL file not found: %~1
    exit /b 1
)

REM Set the default connection option
set CONNECTION_OPTION=

REM Parse the --mysql flag
if "%~2"=="--mysql" (
    set CONNECTION_OPTION=--connection=mysql
)

REM Run the artisan command
echo Importing SQL file: %~1
php artisan db:import-sql "%~1" %CONNECTION_OPTION%

echo.
echo Import process completed.
