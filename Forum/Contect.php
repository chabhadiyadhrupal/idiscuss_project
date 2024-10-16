<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>IDiscuss</title>
  </head>
  <body>
   
 <?php
 include "partials/Connect.php";
     include "partials/_Header.php"; 
     ?> <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Contact Admin</title>
     <style>
         /* Basic reset */
         * {
             margin: 0;
             padding: 0;
             box-sizing: border-box;
         }
         body {
             font-family: Arial, sans-serif;
             background-color: #f8f9fa;
             color: #333;
             overflow-x: hidden; /* Prevent horizontal scroll */
         }
         /* Container styling with fade-in animation */
         .container {
             max-width: 600px;
             margin: 50px auto;
             padding: 20px;
             background-color: #fff;
             border-radius: 8px;
             box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
             opacity: 0;
             transform: translateY(20px);
             animation: fadeInUp 1s ease-in-out forwards;
         }
         h2 {
             text-align: center;
             margin-bottom: 20px;
             color: #343a40;
             opacity: 0;
             animation: fadeIn 1s ease-in-out 0.5s forwards;
         }
         .contact-info {
             text-align: center;
             font-size: 18px;
             color: #495057;
         }
         .contact-info p {
             margin: 15px 0;
             opacity: 0;
             animation: fadeIn 1s ease-in-out 0.7s forwards;
         }
         .contact-info a {
             color: #007bff;
             text-decoration: none;
             position: relative;
             transition: color 0.3s ease-in-out;
         }
         .contact-info a::after {
             content: "";
             position: absolute;
             width: 0;
             height: 2px;
             display: block;
             background: #007bff;
             transition: width 0.3s ease;
             bottom: -2px;
             left: 0;
         }
         .contact-info a:hover {
             color: #0056b3;
         }
         .contact-info a:hover::after {
             width: 100%;
         }
         .icon {
             font-size: 48px;
             color: #007bff;
             opacity: 0;
             animation: fadeIn 1s ease-in-out 1s forwards;
         }
 
         /* Keyframe animations */
         @keyframes fadeInUp {
             from {
                 opacity: 0;
                 transform: translateY(20px);
             }
             to {
                 opacity: 1;
                 transform: translateY(0);
             }
         }
         @keyframes fadeIn {
             from {
                 opacity: 0;
             }
             to {
                 opacity: 1;
             }
         }
 
         /* Media Queries for Responsiveness */
         @media (max-width: 768px) {
             .container {
                 padding: 15px;
             }
             .contact-info {
                 font-size: 16px;
             }
         }
     </style>
 </head>
 <body>
 
 <div class="container">
     <h2>Contact Admin</h2>
 
     <div class="contact-info">
         <p><strong>Email Support:</strong> <a href="mailto:admin-support@example.com">admin-support@example.com</a></p>
         <p><strong>Phone:</strong> <a href="tel:+1234567890">+1 (234) 567-890</a></p>
         <p><strong>Instagram:</strong> <a href="https://instagram.com/admin_handle" target="_blank">@admin_handle</a></p>
     </div>
 </div>
 
 </body>
     
   <?php include "partials/_Footer.php";?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>