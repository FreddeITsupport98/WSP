<?php
session_start();
include 'include/db.php';

$tweetId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$sth = $dbh->prepare('SELECT tweet.*, users.name FROM tweet
            JOIN users
            ON tweet.user_id = users.id
            WHERE tweet.id = :tweetId');
$sth->bindParam(':tweetId', $tweetId);
$sth->execute();
$row = $sth->fetch(PDO::FETCH_ASSOC);

$title = "Tweeters from " . $row['name'];

/*SELECT * 
FROM tweet 
join users on tweet.user_id = users.id
join comments on tweet.id = comments.tweet_id
where tweet.id = 2;
*/

$sth = $dbh->prepare('SELECT tweet.*, users.name, comments.body as comment 
            FROM tweet
            JOIN users
            ON tweet.user_id = users.id
            JOIN comments
            ON tweet.id = comments.tweet_id
            WHERE tweet.id = :tweetId');
$sth->bindParam(':tweetId', $tweetId);
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);

include 'views/tweet.php';
?>