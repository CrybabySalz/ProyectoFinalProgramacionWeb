<?php
    $host = "sql104.infinityfree.com";
    $username = "if0_36278560";
    $password = "qbyuwZu8zSWbrj";
    $dbName = "if0_36278560_libreria";
    $port = 3306;

    try {
        $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbName", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }
?>