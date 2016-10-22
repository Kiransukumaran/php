<?php
/*converting base64 data*/ 
$str = 'VGhpcyBpcyBhbiBlbmNvZGVkIHN0cmluZw==';
$encodedstring= base64_decode($str);
echo "$encodedstring"."\n";
?>