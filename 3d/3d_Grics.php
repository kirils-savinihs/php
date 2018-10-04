<?php

$maxDays=date('t');
$currentDayOfMonth=date('j');

if($currentDayOfMonth == $maxDays){
    echo "Today is the last day of month!<br><br>";
}

for ($i = 0; $i <= $maxDays; ++$i) {
		
    if($i == ($currentDayOfMonth+1) OR $i == ($currentDayOfMonth+2) OR $i == ($currentDayOfMonth+3)) {
        echo "\t";
	    echo "<span style='color:red;'>".$i."</span>";
        if ($i != $maxDays) {
        	echo ",";
        }
		continue;
	}
        
	else {
	    echo "\t";
		echo "$i";
        if ($i != $maxDays) {
            echo ",";
        }
	}
		
	if($i == $maxDays) {
	    echo ".";
	}
}
       
?>