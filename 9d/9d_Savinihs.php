<?php
header("Content-type:image/png");
$im = imagecreatetruecolor(500,500);
$red = imagecolorallocate($im,255,0,0);
$green = imagecolorallocate($im,0,255,0);
$purple = imagecolorallocate($im,30,30,255);
$white = imagecolorallocate($im,255,255,255);

#eyes
imagerectangle($im,100,100,200,200,$red);
imagerectangle($im,500-100,100,500-200,200,$red);

#pupils
imagerectangle($im,125,125,175,175,$white);
imagerectangle($im,500-125,125,500-175,175,$white);

#eyebrows
for ($i=0;$i<4;$i++)
{
        imagerectangle($im,135+$i*25,35+$i*15,160+$i*25,60+$i*15,$red);
        imagerectangle($im,500-(135+$i*25),35+$i*15,500-(160+$i*25),60+$i*15,$red);
}

#mouth
imagearc($im,250,350,300,0,0,180,$red);
imagearc($im,250,350,300,200,0,180,$red);

#teeth
imagepolygon($im,array(250-100,350,250-85,350+30,250-70,350),3,$red);
imagepolygon($im,array(250+100,350,250+85,350+30,250+70,350),3,$red);

#snooze
imagepolygon($im,array(250,200,200,300,250,300),3,$purple);

imagepng($im);
imagedestroy($im);




?>