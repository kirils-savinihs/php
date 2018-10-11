<p>Jautajums 1</p>
<?php
$var1 =max('hello',0,'42');
$var2= max('42',3);
echo $var1.' un '.$var2;
?>

<p>Jautajums 2</p>
<?php
function triple1 ($x) {
    $x =$x*3;
    return $x;
}
$var = 10;
$triplevar=triple1($var);
echo $var."</br>";

function triple2 (&$x){
    $x=$x*3;
    return $x;
}
$var = 10;
$triplevar=triple2($var);
echo $var."</br>";


?>

<p>Jautajums 4</p>
<?php
function f_sum(){
    static $var;
    $number = 2;
    $var += $number;
    echo $var." ";
}

for ($i=0;$i<=10;$i++) 
f_sum();

?>



<p>Tests3</p>
<p>Jautajums 4</p>
<?php
$string = "1111";
if (preg_match("^[a-zа-я0-9_]{8,20}$",$string))
echo "yes";
else echo "no";

?>