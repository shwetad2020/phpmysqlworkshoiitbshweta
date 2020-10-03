<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  <form method="get">
  	sub1 <input type="text" name="sub1"><br>
  	sub2 <input type="text" name="sub2"><br>
  	sub3 <input type="text" name="sub3"><br>
  	sub4 <input type="text" name="sub4"><br>
  	sub5 <input type="text" name="sub5"><br>
  	<input type='submit' value='submit'>
  	

  </form>
  <?php
   $sub1 =$_GET['sub1'];
   $sub2 =$_GET['sub2'];
   $sub3 =$_GET['sub3'];
   $sub4 =$_GET['sub4'];
   $sub5 =$_GET['sub5'];

   $sub=array( $sub1,$sub2, $sub3, $sub4 ,$sub5);
   $x=count($sub);
   $sum=0;
   for ($i=0; $i <$x ; $i++) { 
       $sum=$sum+$sub[$i];

   	   }
   	echo "total sum is".$sum."<br>";
   	echo "percentage is" .($sum/500)*100;
   	  


  ?>

</body>
</html>