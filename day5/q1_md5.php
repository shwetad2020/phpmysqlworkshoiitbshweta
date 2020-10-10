<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="">
		Username : <input type="text" name="user"><br><br>
		Password : <input type="Password" name="pass"><br><br>
		<input type="submit" name="submit"><br><br>
	</form>

</body>
</html>

<?php
   $conect=mysqli_connect("127.0.0.1","root","","data1");
   if (isset($_POST['submit'])) {
    $username=$_POST['user'];
    $password=$_POST['pass'];

    $mdusername=md5($username);
    $mdpassword=md5($password);
    if (md5($username)==$mdusername && md5($password)==$mdpassword) {

    	
        $data="INSERT INTO login(username,password) VALUES('$mdusername','$mdpassword')";
        if (mysqli_query($conect,$data)) {
        	echo "done!";
        }
        else{
        	echo "error";
        }
 
    	 
    } 
   }
?>