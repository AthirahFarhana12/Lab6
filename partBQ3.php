<?php
header("Content-Type: image/png");

// Create an image canvas
$image = imagecreate(400, 150);

// Define colors
$lightGray = imagecolorallocate($image, 211, 211, 211); // Light gray background
$black = imagecolorallocate($image, 0, 0, 0); // Black text

// Path to the custom TrueType font
$fontPath = __DIR__ . '/PlaywriteHRLijevaGuides-Regular.ttf'; 

// Add the text using the TrueType font
$text = "Hello, Athirah!";
imagettftext($image, 20, 0, 50, 80, $black, $fontPath, $text);

// Output the image
imagepng($image);

// Free memory
imagedestroy($image);
?>
