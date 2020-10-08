<?php 
$string="hello my name is shweta";
$length=strlen($string);
$break=explode(" ", $string);

$revers=strrev($string);
$replace=str_replace("shweta", "rahul", $string);
$low=strtolower($string);
$up=strtoupper($string);
echo "Number of Characters in the string  :".$length."<br>";
echo "Breaking down a string into an array :";
print_r($break);
echo "<br>";
echo "Reverse the string :".$revers."<br>"; 
echo "Convert all alphabetic characters in string to their lower case form:".$low ."<br>";
echo "Convert all alphabetic characters in string to their upper case form:".$up."<br>";
echo "Declare a substring and replace the content of substring into original string:".$replace."<br>";



?>