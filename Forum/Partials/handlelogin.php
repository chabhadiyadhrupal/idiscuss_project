<?php
$showerror="false";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    include 'Connect.php';
     $email=$_POST['loginemail'];
     $password=$_POST['loginpassword'];
    $sql="Select * from users where user_email='$email'";
    $result=mysqli_query($conn,$sql);
    $numrow=mysqli_num_rows($result);   
    if($numrow==1) 
    {
        // $showerror= "Email alreadey In Use";
       $row=mysqli_fetch_assoc($result);
       if(password_verify ($password,$row["user_pass"]))
       {session_start() ;
        $_SESSION["loggedin"] = true;
        $_SESSION['sno'] = $row['sno'];
        $_SESSION["useremail"] = $email;
        echo "logged in". $email;
    }
    header("location: /forum/index.php");
    }
    else{
        $showerror="Invalid credentials";
    }
}
?>