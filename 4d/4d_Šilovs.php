<html>
<head>
    <title>Fourth task - Georgijs Šilovs</title>
</head>
<body>
<form action="4d_Šilovs.php" method="get">
    <input name="name" type="text" placeholder="Vards" required>
    <input name="surname" type="text" placeholder="Uzvards" required>
    <input name="age" type="number" placeholder="Vecums" required>
    <input name="email" type="email" placeholder="E-pasts" required>
    <input name="submit" type="submit">
</form>
<?php
if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    $surname = $_GET['surname'];
    $age = $_GET['age'];
    $email = $_GET['email'];

    $file = fopen('dati.txt', 'w+');
    fwrite($file, "{\"name\":\"$name\",\"surname\":\"$surname\",\"age\":\"$age\",\"email\":\"$email\"}");
    fclose($file);
    $file = fopen('dati.txt', 'r');
    $content = fread($file, filesize('dati.txt'));
    fclose($file);
    preg_match("/\"name\"\\s*:\\s*\"([^\\\"]*)\"/", $content, $matches);
    $name2 = $matches[1];
    preg_match("/\"surname\"\\s*:\\s*\"([^\\\"]*)\"/", $content, $matches);
    $surname2 = $matches[1];
    preg_match("/\"age\"\\s*:\\s*\"([^\\\"]*)\"/", $content, $matches);
    $age2 = $matches[1];
    preg_match("/\"email\"\\s*:\\s*\"([^\\\"]*)\"/", $content, $matches);
    $email2 = $matches[1];
    echo "<table>
            <tr><td>Vards</td><td>$name2</td></tr>
            <tr><td>Uzvards</td><td>$surname2</td></tr>
            <tr><td>Vecums</td><td>$age2</td></tr>
            <tr><td>E-pasts</td><td>$email2</td></tr>
          </table>";
}
?>
</body>
</html>
