<?php
$showerror="false";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    include 'Connect.php';
    $user_email=$_POST['signupemail'];
    $user_password=$_POST['signuppassword'];
    $user_cpassword=$_POST['signupcpassword'];
    $sql="SELECT * FROM `users` WHERE user_email='$user_email'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num>0)
    {
        $showerror= "Email already exists";
    }
    else
        {   if($user_password==$user_cpassword)
            {
                $hash=password_hash($user_password,PASSWORD_DEFAULT);
                $sql="INSERT INTO `users` (user_email,user_pass) VALUES ('$user_email','$hash')";
                $result=mysqli_query($conn,$sql);
                if($result)
                {
                    $showalert=true;
                    header("location: /forum/index.php?signupsuccess=true");
                    exit();
                    // echo "Registration successful";
                }
               
            }
            else
            {
                $showerror="Passwords do not match";
                // echo "Passwords do not match";
            }
            header("location: /forum/index.php?signupsuccess=false&error=$showerror");
        }
} 
?>