<?php
    include 'header.php';
?>

<div class="container px-5">
    <div class="d-flex justify-content-center pt-5">
    <form method="POST" action="post.php" class="w-50">
        <div class="form-group">
            <label for="body">Tweeter body</label>
            <textarea
                class="form-control"
                id="body"
                name="body"
                rows="3"
                maxlength="140"
                placeholder="Post something amazing..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php
    include 'footer.php';
?>