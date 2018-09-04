<html>
    <head>
    <style>
        div{
            float: right;
        }
        
        </style>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head><br>
    
<h2  align="center">Welcome to admin </h2>
<body>
    <table class="table table-bordered" border="1">
        <tr><th>id</th>
            <th>Username</th>
            <th>Password</th>
             <th>Con pass</th>
            <th>Email</th>
             <th>Mobil no</th>
            <th colspan="2">Operation</th>
        </tr>
        <div>
        <a href="admin_logout.php"><input type="button"class="btn btn-danger" value="logout"></a><br><br>
        </div>
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
            
            <td>
            <form action="admin_index.php" method="get">
                <input type="hidden" name="del1" value="<?php echo $id; ?>">
                <input type="submit" class="btn btn-danger" name="delete" value="Delete"></form>
            </td>    
            
            <td>
            <form action="admin_update.php" method="get">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" class="btn btn-primary" name="update" value="Update"></form>
            </td>  
                
           
        </tr>
            
            
  
  

    
       
<?php
 
  }
}
else{
    
        header("Location:login.php");
}

        if(isset($_GET['delete'])){
            $delete= $_GET['del1'];
            
            $deleted="delete from user_register where id='$delete'";
            $res_del=mysql_query($deleted) or die("error". mysqli_error());
        }
   
        if(isset($_GET['delete']))
        {
        header("location:admin_index.php");
        
        }
        
        
        
        
        
?>
</table>

</body>

</html>