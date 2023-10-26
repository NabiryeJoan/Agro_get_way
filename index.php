<?php
session_start();
error_reporting(0);
include('includes/db_config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agroget away</title>
</head>

<body>

    <body>
        <?php include_once('includes/header.php'); ?>
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <div class="grid grid-cols-2 gap-2">
            <img src="assets/pictures/tea.jpeg" alt="" class="home-images">
            <img src="assets/pictures/harvesting.jpeg" alt="" class="home-images">
            <img src="assets/pictures/coffee.jpeg" alt="" class="home-images">
            <img src="assets/pictures/visit.jpeg" alt="" class="home-images">
            <img src="assets/pictures/coffee-yard.jpeg" alt="" class="home-images">
            <img src="assets/pictures/tea yard.jpeg" alt="" class="home-images">
        </div>
        <p class="check">Check us out on</p>
        <div class="icons-3">
            <!-- <i class="fa fa-twitter" aria-hidden="true"></i> -->
            <img src="assets/pictures/Logo_twitter.png" alt="" class="img-icons">
            <img src="assets/pictures/GitHub-Mark.png" alt="" class="img-icons">
            <img src="assets/pictures/fb2.png" alt="" class="img-icons">
        </div>
    </body>
</html>