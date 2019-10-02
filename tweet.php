<?php

// tweet.php?id=3

// tweet.php?id=<script>alert("xss")</script>

//$tweetId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$tweetId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

include 'include/dbinfo.php';
try {
    $dbh = new PDO(
        'mysql:host=localhost;charset=utf8mb4;dbname=' . $database . '',
         $user,
          $password
    );
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$sth = $dbh->prepare('SELECT tweet.*, users.name FROM tweet #väljer tweet med alla användar namn
            JOIN users #lägget till användar namn
            ON tweet.user_id = users.id #User.id och weet.user_id
            WHERE tweet.id =' . $tweetId);
$sth->execute();
$row = $sth->fetch(PDO::FETCH_ASSOC);
$result = $sth->fetch(PDO::FETCH_ASSOC);
echo "<pre>" . print_r($result,1 ) . "</pre>";
include 'views/tweet-layout.php';
?>