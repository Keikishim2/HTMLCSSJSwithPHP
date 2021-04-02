<?php
header( "Content-type: image/png" );

$img = imagecreate( 200, 80 );
$background = imagecolorallocate($img, 0,128,128);
$text_color = imagecolorallocate($img, 255, 255, 0);
imagestring($img, 4, 30, 25, "TEST", $text_color);
imagesetthickness ($img, 5);

imagepng($img);
imagedestroy($img);
?>