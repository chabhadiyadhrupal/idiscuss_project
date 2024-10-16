<?php
// echo "this is logout page";
session_start();

// unset all session variable
session_destroy();
header("Location: /forum"); // Redirect to home page
?>