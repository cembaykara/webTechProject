<?php

require_once ("database/DatabaseConnection.php");
require_once ("mailSender.php");
/**
 * This is the function that handles the registration
 */
function register() {
    $postedData = $_POST['data'];

    $email = $postedData['email'];
    $firstname = $postedData['firstname'];
    $lastname = $postedData['lastname'];
    $password = $postedData['password'];
    $confirmPassword = $postedData['confirm_password'];

    //TODO: we should validate our data before inserting to database

    // create PDO connection object
    $dbConn = new DatabaseConnection();
    $pdo = $dbConn->getConnection();

    // insert using PDO prepared statement, it helps prevents against sql injection attack (more on that later)
    $params = [
        ':firstname' => $firstname,
        ':lastname' => $lastname,
        ':password' => password_hash($password, PASSWORD_DEFAULT), // we MUST not store password as plain text
        ':email' => $email
    ];

    try {
        $statement = $pdo->prepare(
            "INSERT INTO `users` (`firstname`, `lastname`, `password`, `email`) 
                          VALUES (:firstname, :lastname, :password, :email)"
        );

        $statement->execute($params);

        if ($pdo->lastInsertId()) {
            echo "Registration successful";
            sendMail(
                "Registration was successful",
                "Hello {$firstname}, Welcome to goforkabit.com, you registration was successful!",
                $email
            );
            return;
        }

    } catch (PDOException $e) {
        // usually this error is logged in application log and we should return an error message that's meaninful to user
        echo $e->getMessage();
    }

    echo "Registration was not successful";

    return;
}

// call to the register function
register();