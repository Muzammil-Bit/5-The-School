<?php
include('./db.php');

if (!isset($_GET['EditBtn'])) {
    header('Location: ../index.php');
} else {
    $id = $_GET['EditBtn'];
    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];
    $class = $_GET['class'];
    $grade = $_GET['grade'];

    $con = DatabaseConnection();
    $query = "UPDATE student_data SET student_first_name='$firstName', student_last_name='$lastName', student_class='$class', student_grade='$grade'
    WHERE id='$id'";

    if (mysqli_query($con, $query)) {
        header('Location: ../student-data.php?error=editSuccess');
    }
}