<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        
        $conn = new mysqli($servername, $username, $password);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Create Database

        $create_db = "CREATE DATABASE IF NOT EXISTS mosawan";
        if ($conn->query($create_db) === true){
            echo "Database Created";
        }else{
            echo "Error creating database: ".$conn->error;
        }

        $conn->select_db("mosawan");

        // Create Tables

        $create_users = "CREATE TABLE IF NOT EXISTS Users (
            UserID int NOT NULL AUTO_INCREMENT,
            Username varchar(255),
            Email varchar(255),
            Passwd varchar(255),
            PRIMARY KEY (UserID)
            )";

            $create_users = "CREATE TABLE IF NOT EXISTS Users (
            UserID int NOT NULL AUTO_INCREMENT,
            Username varchar(255),
            Email varchar(255),
            Passwd varchar(255),
            PRIMARY KEY (UserID)
            )";

            $create_users = "CREATE TABLE IF NOT EXISTS Users (
            UserID int NOT NULL AUTO_INCREMENT,
            Username varchar(255),
            Email varchar(255),
            Passwd varchar(255),
            PRIMARY KEY (UserID)
            )";

            $create_users = "CREATE TABLE IF NOT EXISTS Users (
            UserID int NOT NULL AUTO_INCREMENT,
            Username varchar(255),
            Email varchar(255),
            Passwd varchar(255),
            PRIMARY KEY (UserID)
            )";

            $create_users = "CREATE TABLE IF NOT EXISTS Users (
            UserID int NOT NULL AUTO_INCREMENT,
            Username varchar(255),
            Email varchar(255),
            Passwd varchar(255),
            PRIMARY KEY (UserID)
            )";

            // Create contents of table

            $users = "INSERT INTO Users (Username, Email, Passwd)
            VALUES ('User1', 'user@email.com', 'password'),
            ('UserTwo', 'user@gmail.com', '12345678'),
            ('ThirdUser', 'user@example.com', '87456321')";

            $users = "INSERT INTO Users (Username, Email, Passwd)
            VALUES ('User1', 'user@email.com', 'password'),
            ('UserTwo', 'user@gmail.com', '12345678'),
            ('ThirdUser', 'user@example.com', '87456321')";

            $users = "INSERT INTO Users (Username, Email, Passwd)
            VALUES ('User1', 'user@email.com', 'password'),
            ('UserTwo', 'user@gmail.com', '12345678'),
            ('ThirdUser', 'user@example.com', '87456321')";

            $users = "INSERT INTO Users (Username, Email, Passwd)
            VALUES ('User1', 'user@email.com', 'password'),
            ('UserTwo', 'user@gmail.com', '12345678'),
            ('ThirdUser', 'user@example.com', '87456321')";


            $users = "INSERT INTO Users (Username, Email, Passwd)
            VALUES ('User1', 'user@email.com', 'password'),
            ('UserTwo', 'user@gmail.com', '12345678'),
            ('ThirdUser', 'user@example.com', '87456321')";


        $conn->query($users);
        $conn->query($student);
        $conn->query($course);
        $conn->query($instructor);
        $conn->query($enrollment);

        $conn->close(); 

        echo "<br><br>Redirecting in 5 seconds...";
            

?>
</body>
</html>