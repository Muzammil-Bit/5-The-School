<?php
include('./db.php');
//Redirect User to home page if user has not submitted the form
if (!isset($_GET['createBtn'])) {
    header('Location: ../index.php');
} else {

    //Store user data in the variables

    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];
    $class = $_GET['class'];
    $grade = $_GET['grade'];
    //Database connection
    $con = DatabaseConnection();
    //Query to input data in the database
    $query = "INSERT INTO student_data (student_first_name,student_last_name,student_class,student_grade) 
    VALUES('$firstName','$lastName','$class','$grade')";
    //Run query on the database
    $result = mysqli_query($con, $query);

    //If there is an error stop and display the error
    if (mysqli_errno($con)) {
        echo mysqli_error($con);
        exit();
    }
    //If successful redirect the user to homepge with success message
    if ($result) {
        header('Location: ../student-data.php?error=createSuccess');
        echo $result;
    } else {
        echo mysqli_error($con);
        exit();
    }
}