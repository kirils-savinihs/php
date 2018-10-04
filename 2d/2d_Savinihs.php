<?php
$a = array("Kirils","Georgijs","Danils","Andrejs","Aleksejs","Janis","Jans","Glebs","Hektors","Jaroslavs");


function printArray ($input)
{
	echo "Viss masivs:<br><br>";
	foreach ($input as $i)
	{
	echo "$i(garums = ".strlen($i).")<br>";
	}
}



function lielakNeka6 ($input)
{
	echo "Vardi ar garumiem kas ir lielak par 6 burtiem<br><br>";
	foreach ($input as $i)
	{	

		if (strlen($i)>6)
		{
			
			echo "$i(garums = ".strlen($i).")<br>";
		}
		
	}
	
}

printArray($a);
echo "<br>";
lielakNeka6($a);

 ?>
