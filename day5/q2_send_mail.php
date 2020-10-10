<!DOCTYPE html>
<html>
<head>
	<title>feedback form</title>
	<style type="text/css">
	.form_contain{
		width: 210px;
		height: 210px;
		margin: 50px 50px;
		padding: 15px;
		border:1px solid black;

	}

	</style>
</head>
<body>
	<div class="form_contain">
		<form method="post">
			
			<label>NAME</label>      :<input type="text" name="name"><br><br>
			<label>EMAIL</label>     : <input type="email" name="email"><br><br>
			<label>FEEDBACK</label>  :<input type="text" name="feedback"><br><br>
			<input type="submit" name="submit" value="send feedback"><br>
			
		</form>
	</div>

</body>
</html>

<?php
 if (isset($_POST['submit'])) {
   	
   	 $name=$_POST['name'];
   	 $to=$_POST['email'];
   	 $feedback=$_POST['feedback'];
     $body="thank you for your feedback";
     $subject="respones to feedback  ";
     $headers="FROM:shwetadundale@gmail.com";
     $admin="shwetadundale@gmail.com";

     $msg="feedback response from $name :\n $feedback";
     if (mail("$to", "$subject", "$body","$headers")) {

     	echo "mail is send sucessfully";

     }
     else
     	die(" please enter your details ");

   }  
  

?>