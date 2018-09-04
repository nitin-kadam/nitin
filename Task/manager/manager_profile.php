<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        
        body{
            background-color: azure;
        }
        input{float: right}
        </style>
    </head>
      
    <br><br><br>
   
<h2  align="center">Welcome to manager profile </h2>
<body>
    <table class="table table-bordered" border="1" align="center">
        <tr><th>id</th>
            <th>Username</th>
            <th>Password</th>
             <th>Con pass</th>
            <th>Email</th>
             <th>Mobil no</th>
   
        </tr>
        
        <a href="manager_logout.php"><input type="button" class="btn btn-danger" value="logout"></a>
        
        <br><br>
        
<?php 

    session_start();

if(isset( $_SESSION["user"]))

{
    
$host="localhost";
$user="root";
$password="";
$db="task";
mysql_connect($host,$user,$password);
mysql_select_db($db);
    
   $data= $_SESSION["user"];
    
    $query ="SELECT * FROM user_register";
   $result=mysql_query($query);
  while($row=mysql_fetch_array($result))
{
    

    $id=$row['id'];
    $name=$row['username'];
    $pass=$row['password'];
    $cpass=$row['conpassword'];
    $email=$row['email'];
    $mobile=$row['mobileno'];
  
?>
        
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $pass; ?></td>
            <td><?php echo $cpass; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $mobile; ?></td>
        </tr>
               
       
<?php
 
  }
}
else{
    
        header("Location:manager_login.php");
}       
?>
</table>

</body>

</html>