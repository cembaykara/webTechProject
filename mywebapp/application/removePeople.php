<?php
session_start();
require_once ("database/DatabaseConnection.php");

function removePerson(){

    $postedData = $_POST['data'];
    $sentId = $postedData['id'];

    $dbConn = new DatabaseConnection();
        $pdo = $dbConn->getConnection();

    try{
        $statement = $pdo->prepare("DELETE FROM `users` WHERE id = :id");
        $statement->bindParam(':id', $sentId);
        $statement->execute();
    }
    catch (PDOException $e) {
    // usually this error is logged in application log and we should return an error message that's meaninful to user
    echo $e->getMessage();
}

if ($_SESSION['isAdmin']){
    header("Location: ../remove_people_admin.php");
}else{
    header("Location: ../dashboard.php");
}

}

removePerson();