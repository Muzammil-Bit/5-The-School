<?php include("./inc/header.php");
// Quering the data from database
$con = DatabaseConnection();

$query = "SELECT * FROM student_data";
$result = mysqli_query($con, $query);

?>


<div class="student-data-container">
    <?php echo isset($_GET['error']) &&  $_GET['error'] == 'editSuccess' ? '<p class="p-3 mb-2 bg-primary text-white text-center" id="successMessage">Student Data Updated successfuly </p>' : "";
    echo isset($_GET['error']) && $_GET['error'] == 'createSuccess' ? '<p class="p-3 mb-2 bg-primary text-white text-center" id="successMessage">New Student Created Successfully </p>' : "";  ?>
    <table>
        <tr>
            <th>First Name</th>
            <th>Lastname</th>
            <th>Class</th>
            <th>Recent Grade</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($result)) { ?>
        <tr>
            <td><?php echo $row['student_first_name'] ?></td>
            <td><?php echo $row['student_last_name'] ?></td>
            <td><?php echo $row['student_class'] ?></td>
            <td><?php echo $row['student_grade'] ?></td>
            <!-- Send the id of the student to the next page -->
            <?php echo isset($userName) ? '<td><a href="./editStudent.php?studentId= ' . $row['id'] . '">Edit</a>
            </td> ' : ''; ?>
        </tr>

        <?php } ?>
    </table>

    <?php echo isset($userName) ? '<a class="new-student" href="./createStudent.php?studentId=createNewStudent">Add New Student</a>' : ""; ?>
</div>


<script>
const el = document.getElementById('successMessage');


if (el !== null) {
    window.setTimeout(() => {
        el.classList.toggle('transition');

    }, 2000);





}
</script>


<?php include("./inc/footer.php") ?>