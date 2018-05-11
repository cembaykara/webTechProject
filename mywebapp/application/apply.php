<?php
session_start();
require_once ("database/DatabaseConnection.php");
//require_once ("mailSender.php");

function apply() {
    $postedData = $_POST['data'];

    $applied = $postedData['id'];
    $user = $_SESSION['userID'];

    //TODO: we should validate our data before inserting to database

    // create PDO connection object
    $dbConn = new DatabaseConnection();
    $pdo = $dbConn->getConnection();

    // insert using PDO prepared statement, it helps prevents against sql injection attack (more on that later)
    $params = [
        ':fk_applied_user' => $user,
        ':fk_job' => $applied,
    ];

    try {
        $statement = $pdo->prepare(
            "INSERT INTO `applied` (`fk_job`, `fk_applied_user`) 
                          VALUES (:fk_job, :fk_applied_user)"
        );

        $statement->execute($params);

        $statement = $pdo->prepare(
            "INSERT INTO `job` (`fk_applied_users`) 
                          SELECT id FROM `applied` WHERE :fk_job = :fk_job");
        $statement->execute();



        if ($pdo->lastInsertId()) {
            header('Location: /mywebapp/dashboard_employee.php');
            // sendMail(
            //     "Registration was successful",
            //     "Hello {$firstname}, Welcome to goforkabit.com, you registration was successful!",
            //     $email
            // );
            return;
        }

    } catch (PDOException $e) {
        // usually this error is logged in application log and we should return an error message that's meaninful to user
        echo $e->getMessage();
        echo $applied;
    }
    return;
}

// call to the register function
apply();