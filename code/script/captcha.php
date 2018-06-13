<?php
    session_start();
    $fonts = $_SERVER['DOCUMENT_ROOT']."/wimf/font/captcha/";
    header("Content-Type: image/png");

    /* CONFIG */
    $x = 300;
    $y = 100;
    $z = 0;
    $lenmin = 5;
    $lenmax = 7;
    $interval = 50;
    $space = 50;
    $fontmax = 30;
    $fontmin = 50;
    $charAutho = "abcdefghijklmnopqrstuvwxyz01234567890";
    $charAutho =  str_shuffle($charAutho);
    $captcha = substr($charAutho, 0, rand($lenmin, $lenmax));
    $text = str_split($captcha);
    $_SESSION['captcha'] = $captcha;

    $image = imagecreate($x, $y);
    imagefill($image, 0, 0, imagecolorallocate($image, rand(10, 50), rand(10, 100), rand(10, 100)));

    function fontfill()
    {
    $dir = "../../font/captcha/";
    $c = 1;

    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
            	if ($file == '.' || $file == '..')
                    continue;
                $font[$c] = $dir.$file;
                $c++;
                }
            closedir($dh);
            $font[0] = $c;
            return ($font);
            }
        }
    }

    $font = fontfill();  

    for ($i = 0; $i < strlen($captcha); $i++) { /* TEXT */
        imagettftext($image, rand($fontmax, $fontmin), rand(-35,35), rand($space - $interval, $space), rand($y / 3, $y), 
        imagecolorallocate($image, rand(100, 255), rand(100, 255), rand(100, 255)), $font[rand(1, $font[0] - 1)], $text[$i]);
        $space += $interval;
    }
    for ($i = 0; $i < rand(4, 10); $i++) /* LIGNE */
        imageline($image, rand($z, $x), rand($z, $y), rand($z, $x), rand($z, $y), 
        imagecolorallocate($image, rand(100, 255), rand(100, 255), rand(100, 255)));
    for ($i = 0; $i < rand(1, 2); $i++) /* POINTILLÉ */
        imagedashedline($image, rand($z, $x), rand($z, $y), rand($z, $x), rand($z, $y),
            imagecolorallocate($image, rand(100, 255), rand(100, 255), rand(100, 255)));
    for ($i = 0; $i < rand(5, 7); $i++) /* ELLIPSE */
        imageellipse($image, rand(-100, $x + 100), rand(-100, $y + 100), rand(100, $x + 100), rand(100, $y),
        imagecolorallocate($image, rand(100, 255), rand(100, 255), rand(00, 255)));
    for ($i = 0; $i < rand(1, 1); $i++) /* RECTANGLE */
        imagerectangle($image, rand(-100, $x + 100), rand(-100, $y + 100), rand(100, $x + 100), rand(100, $y),
        imagecolorallocate($image, rand(100, 255), rand(100, 255), rand(100, 255)));
    for ($i = 0; $i < rand(2000, 5000); $i++) /* PIXELS */
        imagesetpixel($image, rand($z, $x), rand($z, $y), imagecolorallocate($image, rand(100, 255), rand(100, 255), rand(100, 255)));
    imagepng($image);
?>