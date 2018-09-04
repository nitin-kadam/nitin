        <html>

        <head><style>body{background-color: peru;}</style>

         <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="css/bootstrap.min.css"> 

            </head>
            <body>

               <h3 align="center">User details</h3>
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

        $query ="SELECT * FROM user_register WHERE email='$data'";
        $result=mysql_query($query);
        while($row=mysql_fetch_array($result))
          {

            $id=$row['id'];
            $name=$row['username'];
            $pass=$row['password'];
            $cpass=$row['conpassword'];
            $email=$row['email'];
            $mobile=$row['mobileno'];
          }

            echo "...Your Id is : ". $id ."<br><br>";
            echo "...Your name :".$name."<br><br>";
            echo "...Your password is :".$pass."<br><br>";
            echo "...Your password is :".$cpass."<br><br>";
            echo "...Your emsil id is :".$email."<br><br>";
            echo "...Your password is :".$mobile."<br><br>";
        ?>
            <a href="logout.php"><input type="button" class="btn btn-danger" value="logout"></a> 

             <a href="updateprofile.php?id=<?php echo $id; ?>"><input type="button" class="btn btn-primary" value="Update"></a> 

        <?php

        }
        else{

                header("Location:login.php");
        }
        ?>
        </body>
        </html>