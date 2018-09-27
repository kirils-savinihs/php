<?php
	echo "Uzrakstīt PHP scenāriju, lai risinātu uzdevumu: 
	izvadīt ekrānā tekošā mēneša dienu sarakstu, piemēram: 1, 2, 3, …, 30. (pēc pēdējas dienas izvadīt zīmi ‘.’).
	Iezīmēt ar sarkano krāsu 3. dienu pēc tekošās. 
	Scenārijā paredzēt situāciju, kad tekošā diena ir pēdējā mēneša diena,
	šajā gadījumā izvadīt atbilstošo ziņojumu.</br>";
	

	#echo $date;
	
	$totalDays = date("t");
	$today = date("d");

	
	
	echo "</br>Tekoša diena:$today</br>";
	
	for ($i =1 ;$i<=$totalDays;$i++)
	{
		if ($today+3 > $totalDays)
		{
			$temp = $today+3;
			echo "3. diena (kas butu $temp) pec tekošas nav iekļauta šī menesi!";
			break;
		}
		
		if ($i == $today+3)
		echo "<font color = 'red'>$i</font>";
		else 
			echo $i;
		
		
		if ($i==$totalDays)
		{
			echo ".";
			break;
		}
		echo ", ";
	
	}
	
?>