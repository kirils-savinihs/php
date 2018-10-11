<!--
Izveidot datubāzi izmantojot phpMyAdmin rīku.
Izveidot MySQL datubāzi (veikals) ar 1 tabulu (preces).
Tabulai jābūt ar primāru atslēgu un citiem laukiem (INT, VARCHAR, FLOAT, DATETIME, ...).
Ievadīt tabulā 3-4 ierakstus. Eksportēt izveidoto datubāzi SQL failā. -->

<?php
$servername = "localhost";
$username = "root";
$password = "00000000";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "closed";
} 
echo "Connected successfully";
$conn->query("DROP DATABASE veikals");
echo "</br>".$conn->error;
$conn->query("CREATE DATABASE veikals");
echo "</br>".$conn->error;
$conn->select_db("veikals");
echo "</br>".$conn->error;
$conn->query("CREATE TABLE preces (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    price FLOAT NOT NULL,
    expiration_date DATETIME NOT NULL
    )");
echo "</br>".$conn->error;    

$conn->query("INSERT INTO preces (id,name,price,expiration_date) 
VALUES (null,\"Lays Onion-Flavored\",69.69,\"2011-12-18 13:17:17\")");
echo "</br>".$conn->error;

$conn->query("INSERT INTO preces (id,name,price,expiration_date) 
VALUES (null,\"Head & Shoulders Citrus Shampoo\",77.77,\"2015-11-16 15:12:14\")");
echo "</br>".$conn->error;

$conn->query("INSERT INTO preces (id,name,price,expiration_date) 
VALUES (null,\"Dove Soap\",4.99,\"2077-11-14 12:11:14\")");
echo "</br>".$conn->error;

$conn->query("INSERT INTO preces (id,name,price,expiration_date) 
VALUES (null,\"Alienware Area-51\",5999.99,\"2099-1-1 13:17:17\")");
echo "</br>".$conn->error;


$conn->close();




?>