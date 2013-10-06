<?php
//SEND HEADER TYPE IMAGE/PNG
header('Content-Type: image/png');

include("../functions/connect_to_database.php");

//CONNECT TO DATABASE
$db = connect_to_database();

	//SELECT ALL REVEALED PIXELS
	include("selectallrevealedpixelsforimage.php");

//width image
$width = 500;

//height image
$height = 280;

//create new true color image
$img = imagecreatetruecolor($width, $height);

//set transparant color
imageSaveAlpha($img, true);
imageAlphaBlending($img, false);
$transparantColor = imageColorAllocateAlpha($img, 0, 0, 0, 127);

//create canvas
imagefilledrectangle($img, 0, 0, $width-1, $height-1, $transparantColor);

//get original image
$im = imagecreatefrompng("../../img/finalimage.png");
	
	//for each pixel in database
	foreach($revealedPixels as $pixel)
	{
		//get color-index from original at these coordinates				
		$rgb = imagecolorat($im, $pixel['x']-1, $pixel['y']-1);
			
		//original pixel color values
		$r = ($rgb >> 16) & 0xFF;
		$g = ($rgb >> 8) & 0xFF;
		$b = $rgb & 0xFF;
			
		//original pixel color
		$revealedPixelColor = imagecolorallocate($im, $r, $g, $b);
			
		//set pixel with color $finalColor
		imagesetpixel($img, $pixel['x']-1, $pixel['y']-1, $revealedPixelColor);
		}

//builds image		
imagepng($img);

//destroys image data
imagedestroy($img);

//disconnect me from the database plz
include("../databaseconnection/disconnectdatabase.php");
?>