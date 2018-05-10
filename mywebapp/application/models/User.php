<?php

require_once (__DIR__ . '/../database/DatabaseConnection.php');

/**
 * Class User
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @param $email user email
 */
class User {

    public function getUserProfile()
    {
        // create PDO connection object
        $dbConn = new DatabaseConnection();
        $pdo = $dbConn->getConnection();

        // get user id from session variable
        $userID = $_SESSION['userID'];

        $statement = $pdo->prepare("SELECT id, firstname, lastname, email FROM `users` WHERE id = :id LIMIT 1");
        $statement->bindParam(':id', $userID);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        // no user matching the email
        if (empty($result)) {
            return [];
        }

        $userData = $result[0];

        return $userData;
    }
}

$user = new User();
$userData = $user->getUserProfile();