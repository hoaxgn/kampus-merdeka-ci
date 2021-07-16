<?php
session_start();
header('Content-type: image/png');

// mengacak huruf dan angka
$chart = str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz');

// ambil 5 karankter dari chart yang di acak
$captcha = substr($chart, 0, 5);

// simpan captcha di dalam session
$_SESSION['captcha'] = $captcha;

// membuat gambar
// imagecreate(P, L)
// P : panjang, L : tinggi
$image = imagecreate(65, 30);

// membuat background dan text
// imagecolorallocate(image, red, green, blue);
$background = imagecolorallocate($image, 2, 89, 47);
$text = imagecolorallocate($image, 255, 255, 255);

imagefilledrectangle($image, 0, 0, 65, 30, $background);
imagestring($image, 20, 10, 7, $captcha, $text);
imagejpeg($image);
imagedestroy($image);
