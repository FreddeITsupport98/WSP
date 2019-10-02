<?php
    session_start();

    if (isset($_SESSION['userId'])) {

        include 'include/db.php';

        $sth = $dbh->prepare('SELECT name, created_at FROM users
                    ORDER BY created_at DESC');
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    
    } else {
        echo "need login";
    }

    $title = "Tweeters Users";

    include 'views/users.php';
?>