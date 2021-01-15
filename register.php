<?php include("./inc/header.php") ?>

<div class="form-container text-center">
    <form class="form-signin" action="./processors/registerProcessor.php" method="POST">
        <h1 class="h3 mb-3 font-weight-normal">Please Register</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="email" type="email" id="inputEmail" class="form-control mb-4" placeholder="Email address" required
            autofocus />
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control mb-4" placeholder="Password"
            required />

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="registerSubmit">
            Register
        </button>
    </form>
</div>

<!-- Footer -->
<?php include("./inc/footer.php") ?>