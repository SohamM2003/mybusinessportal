<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$hostname = "localhost";
$username = "root";
$password = "";
$database = "mybusiness"; // Change this to your application's database name

// Create a connection to the MySQL server
$conn = new mysqli($hostname, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the database exists before creating
$checkDbQuery = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$database'";
$result = $conn->query($checkDbQuery);

if ($result->num_rows === 0) {
    // Create the main application database
    $createDbQuery = "CREATE DATABASE $database";
    if ($conn->query($createDbQuery) === TRUE) {
        // echo "Database created<br>";
    } else {
        echo "Error creating database: " . $conn->error;
    }
} else {
    // echo "Database already exists<br>";
}

// Close the connection temporarily
$conn->close();

// Reconnect to the created database
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create the users table if it doesn't exist
$createUsersTableQuery = "
    CREATE TABLE IF NOT EXISTS users (
        `id` int(11) PRIMARY KEY AUTO_INCREMENT,
        `owner_name` varchar(255) NOT NULL,
        `business_name` varchar(255) NOT NULL,
        `email` varchar(55) NOT NULL,
        `password` varchar(55) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )
";

$createBusinessTableQuery = "
    CREATE TABLE IF NOT EXISTS `business_details` (
        `id` INT(11) NOT NULL AUTO_INCREMENT,
        `user_id` INT NULL DEFAULT NULL,
        `icon_img` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
        `bg_img` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
        `category` VARCHAR(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Not Set',
        `website` VARCHAR(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Not Set',
        `b_contact` VARCHAR(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Not Set',
        `b_email` VARCHAR(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Not Set',
        `tags` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Not Set',
        `description` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Not Set',
        `facebook` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Not Set',
        `instagram` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Not Set',
        `linkedin` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Not Set',
        `skype` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Not Set',
        `twitter` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Not Set',
        `pinterest` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Not Set',
        PRIMARY KEY (`id`)
    )
";

if ($conn->query($createUsersTableQuery) === TRUE) {
    // echo "Table 'users' created or already exists<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($createBusinessTableQuery) === TRUE) {
    // echo "Table 'business_details' created or already exists<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the connection
$conn->close();
