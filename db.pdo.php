<?php
/**
 * PDO Database Connection Utility
 * Replaces deprecated mysql_* extension with secure PDO prepared statements
 */

// Database configuration (same as db.connect.php)
$pdo_host = 'localhost';
$pdo_user = 'root';
$pdo_pass = '';
$pdo_db   = 'jobsportal';
$pdo_charset = 'utf8mb4';

try {
    $dsn = "mysql:host={$pdo_host};dbname={$pdo_db};charset={$pdo_charset}";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $pdo = new PDO($dsn, $pdo_user, $pdo_pass, $options);
} catch (PDOException $e) {
    // Log error (in production, log to file instead of displaying)
    error_log("Database connection failed: " . $e->getMessage());
    die("Database connection failed. Please try again later.");
}