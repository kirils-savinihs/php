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
    daudzums INT(6) NOT NULL,
    expiration_date DATETIME NOT NULL
    )");
echo "</br>".$conn->error;    

$conn->query("INSERT INTO preces (id,name,price,daudzums,expiration_date) 
VALUES (null,\"Lays Onion-Flavored\",69.69,55,\"2011-12-18 13:17:17\")");
echo "</br>".$conn->error;

$conn->query("INSERT INTO preces (id,name,price,daudzums,expiration_date) 
VALUES (null,\"Head & Shoulders Citrus Shampoo\",77.77,666,\"2015-11-16 15:12:14\")");
echo "</br>".$conn->error;

$conn->query("INSERT INTO preces (id,name,price,daudzums,expiration_date) 
VALUES (null,\"Dove Soap\",4.99,4,\"2077-11-14 12:11:14\")");
echo "</br>".$conn->error;

$conn->query("INSERT INTO preces (id,name,price,daudzums,expiration_date) 
VALUES (null,\"Alienware Area-51\",5999.99,7777,\"2099-1-1 13:17:17\")");
echo "</br>".$conn->error;


$result = $conn->query("SELECT * FROM preces ORDER BY price DESC,daudzums DESC");
echo "</br>".$conn->error;


echo "SELECT * FROM preces ORDER BY price DESC, daudzums DESC </br></br>";

$styleth = "<th style = \"border: 1px solid black;\">";

echo "<table style = \"border: 1px solid black;\">";
echo "<col width = \"300\">";
echo "<col width = \"300\">";
echo "<col width = \"300\">";

echo "<tr>";
echo $styleth."Name"."</th>".$styleth."Price"."</th>".$styleth."Amount"."</th>";
echo "</tr>";



while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<th>".$row['name']."</th>"."<th>".$row['price']."</th>"."<th>".$row['daudzums']."</th>";
    echo "</tr>";
}

$conn->close();




?>