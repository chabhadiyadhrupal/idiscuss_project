<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>IDiscuss</title>
    <style>
        /* Body and text colors with transitions */
        body {
            transition: background-color 0.5s ease, color 0.5s ease;
        }

        body.light-mode {
            background-color: #ffffff;
            color: #343a40;
        }

        body.dark-mode {
            background-color: #343a40;
            color: #ffffff;
        }

        /* Navigation bar */
        .navbar {
            background-color: #f8f9fa;
            transition: background-color 0.5s ease, color 0.5s ease;
        }

        body.dark-mode .navbar {
            background-color: #007bff;
            color: #ffffff;
        }

        /* Card styles with transitions */
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.5s ease, color 0.5s ease;
            margin-bottom: 20px;
        }

        body.light-mode .card {
            background-color: #f8f9fa;
            color: #343a40;
        }

        body.dark-mode .card {
            background-color: #495057;
            color: #ffffff;
        }

        /* Card hover effects */
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }

        /* Fixed position for the toggle button */
        #toggleMode {
            position: fixed;
            top: 60px;
            left: 20px;
            z-index: 1000;
            padding: 10px 15px;
            border: none;
            border-radius: 50%;
            background: rgba(1, 122, 255, 1);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, transform 0.3s ease;
            cursor: pointer;
        }

        #toggleMode:hover {
            background: rgba(255, 255, 255, 1);
            transform: scale(1.1);
        }

        /* Scroll to top button */
        #scrollToTop {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            display: none; /* Hidden by default */
        }

        #scrollToTop:hover {
            background-color: #0056b3;
            transform: scale(1.1);
        }

        /* Custom heading style */
        h2 {
            position: relative;
            display: inline-block;
            color: #343a40;
            font-weight: bold;
            margin-bottom: 20px;
        }

        h2::after {
            content: "";
            display: block;
            width: 50px;
            height: 3px;
            background: #007bff;
            position: absolute;
            left: 0;
            bottom: -5px;
            transition: width 0.3s ease;
        }
    </style>
</head>

<body class="light-mode">

    <?php include 'Partials/Connect.php'?>
    <?php include "partials/_Header.php" ?>

    <button id="toggleMode" class="btn">
        <i class="fas fa-sun" id="icon"></i>
    </button>

    <button id="scrollToTop">
        <i class="fas fa-chevron-up"></i>
    </button>

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
                <div class="carousel-item">
                    <img src="images/coding.jpg" height="625" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/logo-IDiscuss.png" height="625" class="d-block w-100" alt="...">
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
        <h2 class="text-center my-3" style="color:#0056b3">IDiscuss-Categories</h2>
        <div class="row">
            <?php
            $sql = "SELECT * FROM categories";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $catid = $row['categories_id'];
                $cat = $row['categories_name'];
                $desc = $row['categories_discription'];
                echo '<div class="col-md-4">
                    <div class="card my-2" style="width: 18rem;">
                        <img src="images/threads.jpg" class="card-img-top" alt="...">
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <script>
        const toggleButton = document.getElementById('toggleMode');
        const icon = document.getElementById('icon');
        const body = document.body;

        // Load the preferred mode from local storage
        const currentMode = localStorage.getItem('mode') || 'light';
        if (currentMode === 'dark') {
            body.classList.remove('light-mode');
            body.classList.add('dark-mode');
            icon.classList.remove('fa-sun');
            icon.classList.add('fa-moon');
        }

        // Toggle mode on button click
        toggleButton.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            body.classList.toggle('light-mode');

            // Save the current mode in local storage
            if (body.classList.contains('dark-mode')) {
                localStorage.setItem('mode', 'dark');
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
            } else {
                localStorage.setItem('mode', 'light');
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
            }
        });

        // Scroll to top functionality
        const scrollToTopButton = document.getElementById('scrollToTop');

        // Show the button when scrolling down
        window.onscroll = function () {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollToTopButton.style.display = "flex";
            } else {
                scrollToTopButton.style.display = "none";
            }
        };

        scrollToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>

</body>

</html>