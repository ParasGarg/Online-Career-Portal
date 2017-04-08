<?php
ob_start();									// Use for header() to avoid any error during page generation.
session_start();							// Use to establish 'session' in the page.

header('Content-type: image/jpeg');			// Use to convert String into Image.

$text = $_SESSION['captcha'];				// Assigning value to text variable by session.
$font_size = 30;

$image_width = 100;
$image_height = 40;

$image = imagecreate($image_width, $image_height);
											// Use to create new image having specific width and height.
imagecolorallocate($image, 255, 255, 255);	// Use to colour the image by RGB color code.
$text_color = imagecolorallocate($image, 0, 0, 0);
											// Use to assign the color for the text to be in the image.

for ($x=1; $x<=50; $x++)					// Using to create lines in captcha by getting their co-ordinates(x, y)
{
	$x1 = rand(1, 100);
	$y1 = rand(1, 100);
	$x2 = rand(1, 100);
	$y2 = rand(1, 100);
	
	imageline($image, $x1, $y1, $x2, $y2, $text_color);
											// Predefine function to generate lines.
}

imagettftext($image, $font_size, 0, 15, 30, $text_color, 'tff/calibri.ttf', $text);
											// Predefine function to write in specific font type on image.
imagejpeg($image);							// Predefine function to generate image by intaking string.
?>
<!-- Captcha Code
	 Generating Captcha Image to confirm that the user is human not computer. -->