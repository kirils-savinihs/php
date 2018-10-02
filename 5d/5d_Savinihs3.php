<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>4.Darbs Savinihs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <main>  
    <?php
    if (!isset($_COOKIE['name']))
    {
        echo "Username cookie is not set <br>";
    }
    else 
    {
        echo "Username Cookie is set to:".$_COOKIE['name']."<br>";
    }


    if (!isset($_COOKIE['password']))
    {
        echo "Password cookie is not set <br>";
    }
    else 
    {
        echo "Password Cookie is set to:".$_COOKIE['password']."<br>";
    }
    ?>
    
    <form class="user_form" action= "5d_Savinihs4.php" method="post">

        <button type="submit" name="delete">Delete Cookies</button><br>

    </form>

    </main>
</body>
</html>