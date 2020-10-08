<?php

echo "Upload file name".$_FILES['myfile'] ['name']."<br>" ;
echo "Upload file type".$_FILES['myfile']['type'] ."<br>";
echo "Upload file size ".$_FILES['myfile']['size']."<br>";
echo "Upload file   ".$_FILES['myfile']['tmp_name']."<br>";
echo "Upload file error ".$_FILES['myfile']['error']."<br>";


?>