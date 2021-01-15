<?php
include('./db.php');
$con = DatabaseConnection();
if (!isset($_POST['registerSubmit'])) {
    header('Location: ../register.php');
} else {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM login WHERE email='$email'";
    $result  = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        // header('Location: ../index.php?log=fail');
        echo 'more';
    } else {
        $q = "INSERT INTO login (email, password) VALUES('$email','$password')";
        $result = mysqli_query($con, $q);

        if ($result) {
            session_start();
            $_SESSION['user_name'] = $email;
            header('Location: ../index.php?log=success');
        } else {
            echo 'Failed: ' . mysqli_error($con);
        }
    }
}