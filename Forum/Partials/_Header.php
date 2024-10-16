<?php

session_start();
echo' <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/forum"><strong>IDiscuss</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/forum">Home <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Categaries
        </a>
        <div class="dropdown-menu">';
        $sql="SELECT categories_name,categories_id FROM `categories` LIMIT 5";
        $result=mysqli_query($conn,$sql);
        while( $row=mysqli_fetch_assoc($result) ){
        echo '<a class="dropdown-item" href="Threadlist.php?catid='.$row["categories_id"].'">'.$row["categories_name"].'</a>';
        }
          // <a class="dropdown-item" href="#">Action</a>
        echo '</div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="Contect.php">Contect</a>
      </li>
    </ul>';
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    echo'<form class="form-inline my-2 my-lg-0 method="get" action="search.php"">
      <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
      <p class="text-light my-0 mx-2">welcome '.$_SESSION['useremail'].'</p>
      <a href="partials/logout.php" class="btn btn-outline-success mx-2">logout</a>
    </form>';
    }

    else
    {
    echo'<form class="form-inline my-2 my-lg-0 method="get" action="search.php"">
      <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>  
     <div >

         <button class="btn btn-outline-success ml-2 "data-toggle="modal" data-target="#loginmodal">login</button>
        <button class="btn btn-outline-success mx-2 " data-toggle="modal" data-target="#Signupmodal">signup</button>';
    }
    echo'
    </div>
  </div>
</nav>';

include 'Partials/loginmodal.php';
include 'Partials/Signupmodal.php';
if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true") {
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>success!</strong> You can now login.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>