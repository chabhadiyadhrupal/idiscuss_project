<!doctype html>
<html lang="en">

<head>
    <style>
    #ques {
        min-height: 400px;
    }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>IDiscuss</title>
</head>

<body>


  <?php include "partials/Connect.php";?>
    <?php
     include "partials/_Header.php";
     ?>
    <?php
     $id=$_GET['threadid'];
      $sql="SELECT * FROM `threads` WHERE threads_id=$id";
      $result=mysqli_query($conn,$sql);
      while( $row=mysqli_fetch_assoc($result) ){
      $threadstital=$row["threads_tital"];
    $threadsdesc=$row["threads_desc"];
    $thread_user_id=$row['threads_user_id'];
    // Query the users table to find out the name of OP
    $sql2 = "SELECT user_email FROM `users` WHERE sno='$thread_user_id'";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);
    $posted_by = $row2['user_email'];
      }
      ?>
       <?php
      $showalert=false;
      $method=$_SERVER['REQUEST_METHOD'];
      if($method=='POST')
      {
        $showalert=true;
        $comment=$_POST['comment'];
        // $comment = str_replace("<", "&lt;", $comment);
        // $comment = str_replace(">", "&gt;", $comment); 
       $sno= $_POST['sno'];
        $sql= "INSERT INTO `comments` ( `comment_content`, `threads_id`, `comment_by`, `comment_time`) VALUES ( '$comment', '$id', '$sno', current_timestamp())";
        $result=mysqli_query($conn,$sql);
        if($showalert)
        {
           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
     <strong>Success!</strong> your comment Added
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>';
        } 
         
      } 
      ?>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4"> <?php echo $threadstital?> </h1>
            <p class="lead"><?php echo $threadsdesc ?></p>
            <hr class="my-4">
            <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
            <p>post by-<b><?php echo $posted_by;?></b></p>
        </div>
    </div>
    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    echo'
    <div class="container">
        <h1 class="py-2">Post Comment</h1>
        <form action="'. $_SERVER['REQUEST_URI'].'" method="post">
            <div class="form-floating">
                <label for="floatingTextarea">type your comment</label>
                <textarea class="form-control" id="comment" name="comment" row="3"></textarea>
                 <input type="hidden" id="sno" name="sno" value="'.$_SESSION["sno"].'">
            </div>
            <button type="submit" class="btn btn-success my-3">PostComment</button>
        </form>
    </div>';
    }else{
      echo'<div class="container">
      <h1 class="py-2">Start Disscussion</h1>
     <p class="lead">you are not login plz login to able to start a Comment</p>
     </div>';
    }
    ?>
    <div class="container" id="ques">
        <h1 class="py-2">Disscussion</h1>

        <?php
     $id=$_GET['threadid'];
      $sql="SELECT * FROM `comments` WHERE threads_id=$id";
      $result=mysqli_query($conn,$sql);
      $noresult=true;
      while( $row=mysqli_fetch_assoc($result) ){
        $noresult=false;
        $id=$row['comment_id'];
      $content=$row['comment_content'];
      $comment_time=$row['comment_time'];
       $comment_user_id=$row['comment_by'];
    $sql2="SELECT user_email FROM `users` WHERE sno='$comment_user_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_assoc($result2);
    echo '<div class="media my-3">
            <img src="https://imgs.search.brave.com/UGyAXhjldiEUznkmX5NsegLDZ4LSQnPxuiIkYIdrW7c/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9jZG4u/dmVjdG9yc3RvY2su/Y29tL2kvcHJldmll/dy0xeC8yMS8yMy9h/dmF0YXItcGhvdG8t/ZGVmYXVsdC11c2Vy/LWljb24tcGVyc29u/LWltYWdlLXZlY3Rv/ci00Nzg1MjEyMy5q/cGc"
                width="60px" class="mr-3" alt="...">
            <div class="media-body">'
            .'<p class="font-weight-bold my-0">Comment by: '.$row2['user_email'].' at '.$row["comment_time"].'</p>
            <p>'.$content.'</p>
            </div>
            </div>';
      }
       
            if( $noresult ){
                echo '<div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4">Not Comment Found</h1>
            <p class="lead">Be The Frist Person to Ask a comment</p>
          </div>
        </div>';
        }
      
      ?>



    </div>
    <?php include"partials/_Footer.php";?>
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

   
</body>

</html>