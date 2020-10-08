<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  <form method="post" action="">
    Name     * : <input type="text" name="name" required><br>
  	subject 1* : <input type="text" name="sub1" required><br>
  	subject 2* : <input type="text" name="sub2" required><br>
  	subject 3* : <input type="text" name="sub3" required><br>
  	subject 4* : <input type="text" name="sub4" required><br>
  	subject 5* : <input type="text" name="sub5" required><br>
    <input type='submit' value='submit' name="submit"><br>
  	

  </form>
  <?php
  
   $connect=mysqli_connect("127.0.0.1","root","","result");
  if (isset($_REQUEST['name']) && isset($_REQUEST['sub1']) && $_REQUEST['sub2'] && $_REQUEST['sub3']  && $_REQUEST['sub4']&& $_REQUEST['sub5']) 
  {

   $name =$_REQUEST['name'];
   $sub1 =$_REQUEST['sub1'];
   $sub2 =$_REQUEST['sub2'];
   $sub3 =$_REQUEST['sub3'];
   $sub4 =$_REQUEST['sub4'];
   $sub5 =$_REQUEST['sub5'];

   $sub=array( $sub1,$sub2, $sub3, $sub4 ,$sub5);
   $x=count($sub);
   $sum=0;
   for ($i=0; $i <$x ; $i++) { 
       $sum=$sum+$sub[$i];
                      }
    $per=($sum/500)*100; 
    $total=500;  
   	echo "Total marks obtain : ".$sum."<br>";
    echo "Total marks :".$total.  "<br>";
   	echo "Percentage :" .$per."<br>";

   $data="INSERT  INTO class1(name,sub1,sub2,sub3,sub4,sub5,total_obtain,total_mark,percent) 
          VALUES('$name',$sub1,$sub2,$sub3,$sub4,$sub5,$sum,$total,$per)";

    if (mysqli_query($connect,$data)) {
        echo "Records enter successfully";
   }
   else{
    echo "unable to insert records";
   }

   	  
}

  ?>

</body>
</html>