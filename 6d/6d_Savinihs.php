<!--
Izveidot failu ar formu ar lauku ‘masīva izmērs’.

Formas mērķa failā ģenerēt masīvu ar nejaušiem 
skaitļiem, ar iegūto masīva izmēra vērtību. 

Iegūto masīvu sakārtot pēc vērtības. 

Izveidoto masīvu saglabāt ‘sesijā’. 

Trešā failā izvadīt iepriekš reģistrēto masīvu
no globāla masīva $_SESSION ar ‘var_dump()’ iebūvētas funkcijas
palīdzību. -->

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
        <p>Ievadiet savu informaciju:</p>

        <form class="arrayform" action= "6d_Savinihs2.php" method="post">
        
            <input type="text" name="arraysize" placeholder="Masiva izmers:"> <br>

            <button type="submit" name="ok">OK</button><br>

        </form>
    </main>
</body>
</html>




