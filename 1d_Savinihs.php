<?php
$a = array("pirmais","otrais","tresais","ceturtais","piektais","sestais","septitais","astotais","devitais","desmitais");

for ($i = 0;$i<10;$i++)
{
	echo "$a[$i]<br>";
}

echo "<br>";


foreach ($a as $i) echo "$i<br>";

echo "<br>";

$i = 0;

while ($i<10)
{
	echo "$a[$i]<br>";
	$i+=1;
}



 ?>
