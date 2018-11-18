<?php

header("Content-type:image/png");
$im = imagecreatetruecolor(1000,1000);
$violet = imagecolorallocate($im,128,0,128);
$black = imagecolorallocate($im,0,0,0);
$white = imagecolorallocate($im,255,255,255);

#background
imagefilledrectangle($im,0,0,1000,1000,$violet);

$letters = array('A','B','C','D','E','F','G','H');
$font =  'C:/Windows/Fonts/arial.ttf';


$i=0;
foreach($letters as &$l)
{
        imagettftext($im,35,0,130+100*$i,950,$white,$font,$l);
        $i++;
}

for ($i=8;$i>=1;$i--)
{
        imagettftext($im,35,0,50,1000-(30+$i*100),$white,$font,$i);
}


for ($i=0;$i<8;$i++)
{
        if ($i%2==0)
        $color = $black;
        else
        $color = $white; 
        for ($y=0;$y<8;$y++)
        {
                imagefilledrectangle($im,$x1=100+$i*100,$y1=100+$y*100,$x1+100,$y1+100,$color);
                if ($color==$black)
                $color=$white;
                else 
                $color=$black;
        }
        
}


imagepng($im);
imagedestroy($im);

?>