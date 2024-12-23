<?php
header("Content-Type: image/png");

// Create an image canvas
$image = imagecreate(300, 150);

// Define colors
$white = imagecolorallocate($image, 255, 255, 255); // White background
$green = imagecolorallocate($image, 0, 255, 0); // Green circle
$purple = imagecolorallocate($image, 128, 0, 128); // Purple line

// Draw a green circle
imageellipse($image, 150, 75, 100, 100, $green);

// Draw a purple line
imageline($image, 50, 50, 250, 100, $purple);

// Output the image
imagepng($image);

// Free memory
imagedestroy($image);
?>
