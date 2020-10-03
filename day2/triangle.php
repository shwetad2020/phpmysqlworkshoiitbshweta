<html>
<form action='triangle.php' method='GET'>
<input type='text' name='side1' placeholder='side1' ><br><br>
<input type='text' name='side2' placeholder='side2'><br><br>
<input type='text' name='side3' placeholder='side3'><br><br>
<input type='submit' value='submit'>
</form>

<?php

	$side1 =$_GET['side1'];
	$side2 =$_GET['side2'];
	$side3 =$_GET['side3'];

	if ($side1==$side2 && $side2==$side3 && $side1==$side3) {
 	echo "Equilateral triangle";
 }

    elseif ($side1==$side2 || $side2==$side3 || $side1==$side3) {
 	echo "Isosceles triangle";
 }

    else
 	echo "Scalene triangle";
	
?>

	</html>
