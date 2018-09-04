<?php 
include('dbcon.php');


/*here we started the session*/
session_start();




if(isset($_GET['login']))
{
    $uname=$_GET['username'];
    $password=$_GET['pass'];
    
    $sql = "SELECT * FROM manager WHERE username='".$uname."' AND password='".$password."'";
    $res =mysql_query($sql) or die("error to find data");
    
    $num_rows=mysql_num_rows($res);
    
    if($num_rows==1)
    {
        /*user is session name*/
        
        $_SESSION['user'] = $uname;
        header('location:manager_profile.php');
            exit;
            
    }
    else
    {
        
        
    ?> <script> alert("invalid user name or password"); </script>

<?php 
    }
    
    }
?>

<html>
    <head>
        <title>Manager Login</title>
        
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
    <form action="manager_login.php" method="get">      
     
        <div class="form-group">  
        <label>User Name: </label>
        <input type="text" name="username" class="form-control">
       
        </div>
     <div class="form-group">
        <label>Password: </label>
        <input type="password" name="pass" class="form-control">
    
        </div>
        <input type="submit"  class="btn btn-primary"  name="login" value="Login">
        
        <input type="reset" class="btn btn-primary" value="Reset">
        
        </form>
        </div>
    </body>
</html>