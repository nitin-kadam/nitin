<?php

$host="localhost";
$user="root";
$password="";
$db="task";
mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['submit']))
 {  
    $uname=$_POST['user'];
	$pass=$_POST['pass'];
	$conpass=$_POST['conpass'];
	$email=$_POST['email'];
    $mobile=$_POST['mobile'];
    
	$query="insert into user_register(`username`,`password`,`conpassword`,`email`,`mobileno`)
	values('$uname','$pass','$conpass','$email','$mobile')";
	$status=mysql_query($query);

    if($status){
        
         echo"<script> user register successfully </script>";
        }
        
    else{
      echo "something wrong";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <script src="js/user_validation.js"></script>

   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <style>
    div1{float: right;}
    </style> 
    </head><br>
       <h2 class="text-center ">User Registration With Validation</h2>
           <div1>
            <a href="login.php" align="center"><input type="submit" name="submit" class="btn btn-primary" value="Login"></a></div1>
	 
    
    
 <body>
  
    <div class="container"><br>
	<form action="index.php" onsubmit="return regular_validation()" method="post">
	<div class="form-group">

	<label>UserName</label>
    <input type="text" name="user" id="username" class="form-control">
	<span id="usererror" class="text-danger font-weight-bold"></span>
	</div>
	
	
	<div class="form-group">
	<label>Password</label>
    <input type="password" 	name="pass" id="password" class="form-control">
	<span id="passworderror" class="text-danger font-weight-bold"> </span>
	</div>
	
	<div class="form-group">
	<label>Conform Password</label>
    <input type="cpassword" 	name="conpass" id="cpassword" class="form-control">
	<span id="cpassworderror" class="text-danger font-weight-bold"> </span>
	</div>
	
	<div class="form-group">
	<label>Email</label>
    <input type="email" 	name="email" id="email" class="form-control">
	<span id="emailerror" class="text-danger font-weight-bold"> </span>
	</div>
	
	<div class="form-group">
	<label>mobile No</label>
    <input type="text" 	name="mobile" id="mobilenumber" class="form-control">
	<span id="mobileerror" class="text-danger font-weight-bold"> </span>
	
	<input type="submit" name="submit" class="btn btn-primary" value="Sign Up">
	</div>
    </form>
        
     </div>
</body>
</html>