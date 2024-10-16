<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>IDiscuss</title>
    <style>
        /* Carousel Image Styling */
        .carousel-item img {
            transition: transform 0.5s ease; /* Smooth zoom effect */
        }

        .carousel-item:hover img {
            transform: scale(1.05); /* Slight zoom on hover */
        }

        /* Card hover effects */
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px); /* Lift effect */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* Shadow effect */
        }

        /* Custom styling for the heading */
        h2 {
            position: relative;
            display: inline-block;
            color: #343a40; /* Dark text */
            font-weight: bold;
            margin-bottom: 20px;
        }

        h2::after {
            content: "";
            display: block;
            width: 50px;
            height: 3px;
            background: #007bff; /* Blue line */
            position: absolute;
            left: 0;
            bottom: -5px;
            transition: width 0.3s ease; /* Smooth line effect */
        }

        /* Responsive adjustments for carousel */
        @media (max-width: 768px) {
            .carousel-item img {
                height: 300px; /* Set a specific height for smaller screens */
                object-fit: cover; /* Cover the area */
            }
        }
    </style>
</head>

<body>

    <?php include 'Partials/Connect.php'?>
    <?php include "partials/_Header.php" ?>

    <div class="container my-4">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1667372393086-9d4001d51cf1?w=1000&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTIzfHxwaHAlMjBkZXZlbG9wZXJ8ZW58MHx8MHx8fDA%3D"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://plus.unsplash.com/premium_photo-1685086785054-d047cdc0e525?w=1000&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fHBocCUyMGRldmVsb3BlcnxlbnwwfHwwfHx8MA%3D%3D"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1669023414162-8b0573b9c6b2?w=1000&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDl8fHBocCUyMGRldmVsb3BlcnxlbnwwfHwwfHx8MA%3D%3D"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center my-3">IDiscuss-Categories</h2>
        <div class="row">
            <?php
            $sql = "SELECT * FROM `categories`";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $catid = $row['categories_id'];
                $cat = $row['categories_name'];
                $desc = $row['categories_discription'];
                echo '<div class="col-md-4">
                    <div class="card my-2" style="width: 18rem;">
                        <img src="https://images.unsplash.com/photo-1484417894907-623942c8ee29?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fHBocHxlbnwwfHwwfHx8MA%3D%3D"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a href="Threadlist.php?catid=' . $catid . '">' . $cat . '</a></h5>
                            <p class="card-text">' . substr($desc, 0, 90) . '...</p>
                            <a href="Threadlist.php?catid=' . $catid . '" class="btn btn-primary">Go Threads</a>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>

    <?php include "partials/_Footer.php" ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>

</html>
