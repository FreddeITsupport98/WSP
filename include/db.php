<?php
include 'include/dbinfo.php'; // lässer in  databasen med användare och lösenord
try { //ger en undentag
    $dbh = new PDO( // repsentera kopplingen mellan server och databass
        'mysql:host=localhost;charset=utf8mb4;dbname=' . $database . '',
         $user,
          $password
    );
} catch (PDOException $e) { // ska inte fånga pdo exception om fel dycker upp
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$sth = $dbh->prepare('SELECT tweet.*, users.name FROM tweet #väljer alla användernamn från samma tweet statehandler och dataasehandler
            JOIN users # lägger till användera
            ON tweet.user_id = users.id # tweet user id eller user id
            ORDER BY updated_at DESC'); # ordning enlingt description
$sth->execute(); // kör
$result = $sth->fetchAll(PDO::FETCH_ASSOC); // ger resultat

include 'views/index_layout.php';
include 'view/tweet-layout.php';
?>