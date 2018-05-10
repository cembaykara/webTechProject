<?php
session_start();
require_once ("database/DatabaseConnection.php");

function post() {

    $userID = $_SESSION['userID'];
    $postedData = $_POST['data'];

    $title = $postedData['title'];
    $body = $postedData['body'];

    $dbConn = new DatabaseConnection();
    $pdo = $dbConn->getConnection();

    $params = [
        ':title' => $title,
        ':body' => $body,
        ':fk_from_user' => $userID
    ];

    try {
        $statement = $pdo->prepare(
            "INSERT INTO `job` (`fk_from_user`, `title`, `body`) 
                          VALUES (:fk_from_user, :title, :body)"
        );

        $statement->execute($params);

        if ($pdo->lastInsertId()) {
            header('Location: /mywebapp/profile.php');
            return;
        }

    } catch (PDOException $e) {
        
        echo $e->getMessage();
    }
    return;
}

post();