<?php
header("Content-Type: image/png");

// Create an image canvas
$image = imagecreate(300, 100);

// Define colors
$yellow = imagecolorallocate($image, 255, 255, 0); // Yellow background
$black = imagecolorallocate($image, 0, 0, 0); // Black text

// Add the text to the image
imagestring($image, 5, 50, 40, "100 Items Sold", $black); // Bold black text

// Output the image
imagepng($image);

// Free memory
imagedestroy($image);
?>
