<section class="card my-3">
    <a class="text-secondary" href="user.php?id=<?= $row['user_id'] ?>">
        <header class="card-header d-flex align-items-center">
            <img class="rounded-circle"
                style="width:40px; height:40px;"
                src="https://robohash.org/<?= $row['name'] ?>"
                alt="Profile picture">
            <h5 class="card-title pl-4 mb-0">
                <?= $row['name'] ?>
                <small class="pl-4">
                    <?= $row['created_at'] ?>
                </small>
            </h5>
        </header>
    </a>
    <a class="text-dark" href="tweet.php?id=<?= $row['id'] ?>">
        <div class="card-body">
            <p class="card-text">
                <?= $row['body'] ?>
            </p>
        </div>
    </a>
    <footer class="card-footer d-flex justify-content-end">
        <i class="material-icons">favorite_border</i>
    </footer>
</section>