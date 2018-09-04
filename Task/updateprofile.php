<?php

include('dbcon.php');

  $id = $_GET['id'];

   $query ="SELECT * FROM user_register WHERE id='$id'";
   $result=mysql_query($query);
  while($row=mysql_fetch_array($result))
{
    

    $id=$row['id'];
    $user=$row['username'];
    $pass=$row['password'];
    $cpass=$row['conpassword'];
    $email=$row['email'];
    $mobile=$row['mobileno'];
  

 

    if(isset($_POST['submit']))
    {
        $id = $_GET['id'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $cpass = $_POST['conpass'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $sql = "UPDATE user_register SET username='$user',password='$pass',conpassword='$cpass',email='$email',mobileno='$mobile' WHERE id='$id'";
        mysql_query($sql);
        
        echo "Entry updated!!";
    }
?>
<html><head>
    
    
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
<style>
    body{
        background-color: oldlace;
    }
    </style>
    </head>
    <body>
        <h2 align="center">user update</h2>
        <div class="container" >
     
            <form  action="updateprofile.php?id=<?php echo $id;?>" method="post">
           <div class="form-group">
               
            <label>Username :</label>
                <input type="text" name="user" class="form-control" value="<?php echo $user; ?>"><br>
               </div>
            <div class="form-group">
            <label>Password :</label>
                <input type="text" name="pass" class="form-control" value="<?php echo $pass; ?>"><br>
                </div>
             <div class="form-group">
             <label>ConPassword : </label>
                <input type="text" name="conpass" class="form-control" value="<?php echo $cpass; ?>"><br>
           </div>
                <div class="form-group">
            <label>Email :</label>
                <input type="text" name="email"  class="form-control" value="<?php echo $email; ?>"><br>
            </div>
                <div class="form-group">
             <label>Mobile no :</label>
                <input type="text" name="mobile"  class="form-control" value="<?php echo $mobile; ?>"><br>
            </div>
            <input type="submit" name="submit" class="btn btn-primary "value="submit">
        </form>
        </div>
            
<?php 
      
  }
        ?>

    </body>
</html>
