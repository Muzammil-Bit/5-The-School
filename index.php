<?php include("./inc/header.php") ?>

<div class="main">
    <div class="data-container">
        <a href="./student-data.php">View All Student Data</a>
        <?php echo isset($userName) ? '<p>You are now logged in. You can now edit student Data.<p/>' : ''; ?>
    </div>
</div>

<?php include("./inc/footer.php") ?>