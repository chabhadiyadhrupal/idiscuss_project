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
     $id=$_GET['catid'];
      $sql="SELECT * FROM `categories` WHERE categories_id=$id";
      $result=mysqli_query($conn,$sql);
      while( $row=mysqli_fetch_assoc($result) ){
      $catname=$row["categories_name"];
    $catdesc=$row["categories_discription"];
      }

      ?>
    <?php
      $showalert=false;
      $method=$_SERVER['REQUEST_METHOD'];
      if($method=='POST')
      {
        $showalert=true;
        $th_tital=$_POST['tital'];
        $th_desc=$_POST['desc'];
        // $th_title = str_replace("<", "&lt;", $th_title);
        // $th_title = str_replace(">", "&gt;", $th_title); 

        // $th_desc = str_replace("<", "&lt;", $th_desc);
        // $th_desc = str_replace(">", "&gt;", $th_desc); 
        $sno=$_POST['sno'];
        $sql= "INSERT INTO `threads` ( `threads_tital`, `threads_desc`, `threads_cat_id`, `threads_user_id`, `time`) VALUES ('$th_tital', '$th_desc', '$id', '$sno', current_timestamp())";
        $result=mysqli_query($conn,$sql);
        if($showalert)
        {
           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
     <strong>Success!</strong> your Threads Added
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>';
        } 
         
      } 
      ?>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Welcome <?php echo $catname?> language threads</h1>
            <p class="lead"><?php echo $catdesc ?></p>
            <hr class="my-4">
            <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
            <!-- <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a> -->
        </div>
    </div>
    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){

      echo'
      <div class="container">
      <h1 class="py-2">Start Disscussion</h1>
      <form action="'. $_SERVER['REQUEST_URI'].'" method="post">
            <div class="form-group">
            <label for="exampleInputEmail1">problem tital</label>
            <input type="text" class="form-control" id="tital" name="tital" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">keep your tital short and crisp as possible</small>
            <input type="hidden" id="sno" name="sno" value="'.$_SESSION["sno"].'">
            </div>
            <div class="form-floating">
                <label for="floatingTextarea">Ellaborate your Concure</label>
                <textarea class="form-control" id="desc" name="desc" row="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success my-3">Submit</button>
            </form>
            </div>';
          }
          else{
            echo'<div class="container">
            <h1 class="py-2">Start Disscussion</h1>
           <p class="lead">you are not login plz login to able to start a disscussion</p>
           </div>';
          }
            ?>
    <div class="container" id="ques">
        <h1 class="py-2">browse Questions</h1>
        <?php
     $id=$_GET['catid'];
      $sql="SELECT * FROM `threads` WHERE threads_cat_id=$id";
      $result=mysqli_query($conn,$sql);
      $noresult=true;
      while( $row=mysqli_fetch_assoc($result) ){
        $noresult=false;
        $id=$row['threads_id'];
      $tital=$row["threads_tital"];
    $desc=$row["threads_desc"];
    $thread_time = $row['time']; 
    $threads_user_id=$row['threads_user_id'];
    $sql2="SELECT user_email FROM `users` WHERE sno='$threads_user_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_assoc($result2);

   // $Threads_time=$row["time"];
    echo '<div class="media my-3">
            <img src="https://imgs.search.brave.com/UGyAXhjldiEUznkmX5NsegLDZ4LSQnPxuiIkYIdrW7c/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9jZG4u/dmVjdG9yc3RvY2su/Y29tL2kvcHJldmll/dy0xeC8yMS8yMy9h/dmF0YXItcGhvdG8t/ZGVmYXVsdC11c2Vy/LWljb24tcGVyc29u/LWltYWdlLXZlY3Rv/ci00Nzg1MjEyMy5q/cGc"
                width="60px" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0 "><a class="text-dark" href="thread.php?threadid='.$id.'">'.$tital.'</a></h5>
                <p>'.$desc.'</p>
            </div>'.'<p class="font-weight-bold my-0">Asked by: '.$row2['user_email'].' at '.$row["time"].'</p>'.'</div>';
      }
      if( $noresult ){
        echo '<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Not Result Found</h1>
    <p class="lead">Be The Frist Person to Ask a Question</p>
  </div>
</div>';
      }
      ?>



    </div>
    <?php include"partials/_Footer.php";?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>