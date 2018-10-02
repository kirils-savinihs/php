<?php
//Izveidot 4 failus. Pirmajā izveidot formu (POST) 
//ar 2 laukiem – vārds un parole. Otrajā – pārbaudīt 
//un apstrādāt formas ievadītus laukus un iegūtas vērtības
//ierakstīt pārlūkprogrammas ‘cepumos’ (Cookies), un
//pāradresēt lietotāju uz 3. failu. Trešajā failā pārbaudīt 
//vai ‘vārds’ un ‘parole’ cepumi ir uzstādīti, un ja tā tas ir,
//izvadīt tos. Ja cepumi nav uzstādīti, izvadīt atbilstošu informāciju.
//Ceturtajā failā realizēt iespēju nodzēst iepriekš ievadītus 
//cepumus (ala Logout funkcija). Ievietot lapās hipersaites uz
//pārējiem failiem.

if (isset($_POST['ok']))
{
    if(!empty($_POST['name']) AND !empty($_POST['password']))
{


    $name = $_POST['name'];
    $password = $_POST['password'];

    setcookie ('name',$name,time()+60);
    setcookie ('password',$password,time()+60);

    header('Location: 5d_Savinihs3.php');

}
else{

    echo "Username vai password ir tukši";

}
}








?>