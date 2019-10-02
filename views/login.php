<?php
    include 'header.php';
?>

<div class="container px-5">
    <div class="d-flex justify-content-center pt-5">
        <form action="login.php" method="POST" class="w-50">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php
    include 'footer.php';
?>