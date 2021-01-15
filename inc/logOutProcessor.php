<?php
// Start the session on the page
session_start();
if ($_GET['link'] == 0) {

    //If Session is set, Destroy the session to logout the user.
    if ($_SESSION['user_name'] !== '') {

        session_destroy();
        header('Location: ../index.php');
    } else {
        echo "b";
    }
    //Redirect User to home page
} else {
    header('Location: ../index.php');
}
