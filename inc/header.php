<?php
// Inculding The database Connection
include('./processors/db.php');
session_start();
if (isset($_SESSION['user_name'])) {
    $userName = $_SESSION['user_name'];
}
?>

<!-- Start Header -->

<html lang="en">





<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Home</title>
</head>

<body>
    <div class="nav-container">
        <div id="logo">The School</div>
        <nav>
            <ul>
                <li><a href="./index.php">Home</a></li>

                <?php if (isset($userName)) {
                    echo '<li><a href="./inc/logOutProcessor.php?link=0">Log Out</a></li>';
                } else {
                    echo '<li><a href="./login.php">Log In</a></li>
                            <li><a href="./register.php">Register</a></li>';
                } ?>
            </ul>
        </nav>
    </div>
    <!-- End Header -->