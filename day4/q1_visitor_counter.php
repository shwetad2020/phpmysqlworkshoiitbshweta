<?php

// $file=fopen("filename.txt", "w");
$content=file_get_contents("filename.txt");
$visitor=$content;


$visitors=$visitor+1;

$filenew=fopen("filename.txt", "w");
fwrite($filenew, $visitors);
echo "you had ".$visitors."visitors";

?>
