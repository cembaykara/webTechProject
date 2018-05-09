<?php

require_once (__DIR__ . '/../database/DatabaseConnection.php');

class Job {

    public function getJob()
    {
        // create PDO connection object
        $dbConn = new DatabaseConnection();
        $pdo = $dbConn->getConnection();

        // get user id from session variable
        $userID = $_SESSION['userID'];

        $statement = $pdo->prepare("SELECT id, body, fk_from_user, fk_applied_users FROM `job` WHERE id = :id LIMIT 1");
        $statement->bindParam(':id', $userID);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        // no user matching the email
        if (empty($result)) {
            return [];
        }

        $jobData = $result[0];

        return $jobData;
    }
}

$job = new Job();
$jobData = $job->getJob();