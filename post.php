<?php
session_start();

if (isset($_POST['body']) && isset($_SESSION['userId'])) {
    include 'include/db.php';

    $filteredUserId = filter_var($_SESSION['userId'], FILTER_VALIDATE_INT);
    $filteredBody = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_SPECIAL_CHARS);

    $sth = $dbh->prepare('SELECT name FROM users WHERE id = :userId');
    $sth->bindParam(':userId', $filteredUserId);
    $sth->execute();

    if ($sth->rowCount() == 1) {

        echo $sth->rowCount();

        $sth = $dbh->prepare('INSERT INTO tweet (body, user_id, created_at, updated_at) VALUES (:body, :userId, now(), now())');
        $sth->bindParam(':body', $filteredBody);
        $sth->bindParam(':userId', $filteredUserId);
        $sth->execute();

        header('Location: tweet.php?id=' . $dbh->lastInsertId());
    } else {
        echo "alert, there seems to be a problem sir.";
    }

} else {
    include 'views/post.php';
}