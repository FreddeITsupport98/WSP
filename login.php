<?php
session_start();
if (isset($_POST['username'])) {

    include 'include/db.php';

    echo "<pre>" . print_r($_POST, 1) . "</pre>";

    $filteredUsername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

    $sth = $dbh->prepare('SELECT * FROM users WHERE name = :name');
    $sth->bindParam(':name', $filteredUsername);
    $sth->execute();

    $result = $sth->fetch(PDO::FETCH_ASSOC);

    echo "<pre>" . print_r($result,1) . "</pre>";

    if (password_verify($_POST['password'], $result['password'])) {
        echo 'Password is valid!';
        $_SESSION['userId'] = $result['id'];
        header('Location: index.php');
        
        echo "<pre>" . print_r($_SESSION, 1) . "</pre>";
    } else {
        echo 'Invalid password.';
    }


    // $sth = $dbh->prepare('SELECT tweet.*, users.name FROM tweet
    // JOIN users
    // ON tweet.user_id = users.id
    // ORDER BY updated_at DESC');
    // $sth->execute();
    // $result = $sth->fetchAll(PDO::FETCH_ASSOC);


} else {

    $title = "Tweeters Login";

    include 'views/login.php';

    //echo password_hash("secret", PASSWORD_DEFAULT);
}





?>