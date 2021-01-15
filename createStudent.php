<?php
if (!isset($_GET['studentId']) || $_GET['studentId'] !== 'createNewStudent') {
    header('Location: ./index.php');
} else {
    include('./inc/header.php');

    $id = $_GET['studentId'];






?>
<div class="container .container-fluid">
    <form action="./processors/createStudentProcessor.php" method="GET">
        <div class="form-group">
            <label for="firsName">Student First Name</label>
            <input name="firstName" class="form-control" type="text" placeholder="e.g. Muzammil">
        </div>
        <div class="form-group">
            <label for="lastName">Student Last Name</label>
            <input name="lastName" class="form-control" type="text" placeholder="e.g. Hussain">
        </div>
        <div class="form-group">
            <label for="class">Class</label>
            <input name="class" class="form-control" type="number" placeholder="1 - 12">
        </div>
        <div class="form-group">
            <label for="grade">Student Most Recent Grade</label>
            <input name="grade" class="form-control" type="text" placeholder="e.g. A++">
        </div>
        <button name="createBtn" type="submit">Create New Student</button>
    </form>


</div>















<?php

    include('./inc/footer.php');
} ?>