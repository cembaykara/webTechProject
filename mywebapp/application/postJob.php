<?php
session_start();
require_once ("database/DatabaseConnection.php");
require_once ("models/User.php");

/**
 * This is the function that handles the registration
 */
function post() {

    $userID = $_SESSION['userID'];
    $postedData = $_POST['data'];

    $title = $postedData['title'];
    $body = $postedData['body'];


    //TODO: we should validate our data before inserting to database

    // create PDO connection object
    $dbConn = new DatabaseConnection();
    $pdo = $dbConn->getConnection();

    // insert using PDO prepared statement, it helps prevents against sql injection attack (more on that later)
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
            header('Location: /mywebapp/dashboard.php');
            return;
        }

    } catch (PDOException $e) {
        // usually this error is logged in application log and we should return an error message that's meaninful to user
        echo $e->getMessage();
    }
    return;
}

// call to the register function
post();