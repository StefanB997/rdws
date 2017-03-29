<?php 	

$file = fopen('test.txt', 'w+');
fwrite($file, 'neznam sho e rabotata');
rewind($file);
$size = filesize('test.txt');
$read = fread($file, $size);	
file_get_contents('https://www.google.com');
?>