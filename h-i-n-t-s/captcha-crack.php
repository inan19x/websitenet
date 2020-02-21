<?php
$url = "http://localhost/guestbook.php";
$str = file_get_contents($url);
$pos1 = strpos($str,"TheCaptcha");
$x = substr($str,$pos1+11,-542);
$equation = str_replace(" ", "", $x);
eval("\$captcha=$equation;");
print $equation."=".$captcha."\n";
?>
