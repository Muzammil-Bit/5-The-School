<?php
include('./inc/header.php');

if (!isset($_GET['studentId'])) {

    header('Location: ./index.php');
} else {


    $id = $_GET['studentId'];


    // Query Data from Database
    $query = "SELECT * FROM student_data WHERE id='$id'";
    $con = DatabaseConnection();

    $result = mysqli_query($con, $query);
    // var_dump($result);
    $row = mysqli_fetch_row($result);
    //var_dump($row);


?>
<div class="container .container-fluid">
    <form action="./processors/editStudentProcessor.php" method="GET">
        <div class="form-group">
            <label for="firsName">Student First Name</label>
            <input name="firstName" class="form-control" type="text" placeholder="e.g. Muzammil"
                value="<?php echo $row[1]; ?>">
        </div>
        <div class=" form-group">
            <label for="lastName">Student Last Name</label>
            <input name="lastName" class="form-control" type="text" placeholder="e.g. Hussain"
                value="<?php echo $row[2]; ?>">
        </div>
        <div class=" form-group">
            <label for="class">Class</label>
            <input name="class" class="form-control" type="number" placeholder="1 - 12" value="<?php echo $row[3]; ?>">
        </div>
        <div class=" form-group">
            <label for="grade">Student Most Recent Grade</label>
            <input name="grade" class="form-control" type="text" placeholder="e.g. A++" value="<?php echo $row[4]; ?>">
        </div>
        <button class="btn " name="EditBtn" type="submit" value="<?php echo $id; ?>">Edit Data</button>
    </form>


</div>















<?php

    include('./inc/footer.php');
} ?>