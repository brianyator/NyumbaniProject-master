<?php 
require_once('DBconnector.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['UName']) || empty($_POST['Password']))
       {
            header("location:authentication.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="SELECT * FROM user WHERE user_id='".$_POST['UName']."' AND password='".$_POST['Password']."'";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:index.php");
              }
            
            else
            {
                header("location:authentication.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else if(isset($_POST['createAccount'])){
      header("location:create_account.html");
    }
    else
    {
        echo 'Not Working Now Guys';
    }


?>