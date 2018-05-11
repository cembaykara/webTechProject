<?php
session_start();
require_once ("database/DatabaseConnection.php");

function removePost(){

    $postedData = $_POST['data'];
    $sentId = $postedData['id'];

    $dbConn = new DatabaseConnection();
        $pdo = $dbConn->getConnection();

    try{
        $statement = $pdo->prepare("DELETE FROM `job` WHERE id = :id");
        $statement->bindParam(':id', $sentId);
        $statement->execute();
    }
    catch (PDOException $e) {
    // usually this error is logged in application log and we should return an error message that's meaninful to user
    echo $e->getMessage();
}
header("Location: ../dashboard.php");
}

removePost();