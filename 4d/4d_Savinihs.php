<?php
//"Uzrakstīt PHP scenāriju, lai risināt šādu uzdevumu:
//saglāba failā „dati.txt” ievadīto informāciju par 
//lietotāju (formā jābūt vairāki lauki) un izvada faila saturu ekrānā."

if (isset($_POST['ok']))
{
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];

    $handle = fopen('dati.txt','w');

    fwrite($handle,$name.PHP_EOL.$surname.PHP_EOL.$age);

    echo "Faila Saturs:"."<br>";

    $readin = file('dati.txt');

    foreach ($readin as $i)
    {
        echo $i."<br>";
    }
}








?>