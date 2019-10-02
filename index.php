<?php
session_start();
include 'include/db.php';

$sth = $dbh->prepare('SELECT tweet.*, users.name FROM tweet
            JOIN users
            ON tweet.user_id = users.id
            ORDER BY updated_at DESC');
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);

$title = "Tweeters Home";

include 'views/index.php';
?>
