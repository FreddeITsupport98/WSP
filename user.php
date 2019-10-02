<?php
session_start();

if (isset($_SESSION['userId'])) {

    include 'include/db.php';

    $userId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    $sth = $dbh->prepare('SELECT * FROM users
                WHERE id = :userId');
    $sth->bindParam(':userId', $userId);
    $sth->execute();
    $row = $sth->fetch(PDO::FETCH_ASSOC);

} else {
    echo "need login";
}

$title = "Tweeters user profile for " . $row['name'];

include 'views/user.php';
?>