<?php
include('./db.php');

if (!isset($_POST['loginSubmit'])) {
    header('Location: ../login.php');
} else {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $q = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    $con = DatabaseConnection();
    $result = mysqli_query($con, $q);


    if (mysqli_num_rows($result) > 0) {
        $name =  $result->fetch_row();
        session_start();
        $_SESSION['user_name'] = $name[2];

        header('Location: ../index.php?log=success');
    } else {
        echo "out";
    }
}