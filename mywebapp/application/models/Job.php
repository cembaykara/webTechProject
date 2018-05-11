<?php

require_once (__DIR__ . '/../database/DatabaseConnection.php');

class Job {

    public function getAllJob()
    {
        // create PDO connection object
        $dbConn = new DatabaseConnection();
        $pdo = $dbConn->getConnection();

        // get user id from session variable
        $userID = $_SESSION['userID'];

        $statement = $pdo->prepare("SELECT id, title, body, fk_from_user, fk_applied_users FROM `job` WHERE fk_from_user = :fk_from_user");
        $statement->bindParam(':fk_from_user', $userID);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        // no user matching the email
        if (empty($result)) {
            return [];
        }

        $jobData = $result;

        return $jobData;
    }

    public function getEverything()
    {
        // create PDO connection object
        $dbConn = new DatabaseConnection();
        $pdo = $dbConn->getConnection();

        // get user id from session variable
        $userID = $_SESSION['userID'];

        $statement = $pdo->prepare("SELECT id, title, body, fk_from_user, fk_applied_users FROM `job` WHERE fk_applied_users != $userID");
        $statement->bindParam(':fk_applied_users', $userID);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        // no user matching the email
        if (empty($result)) {
            return [];
        }

        $jobData = $result;

        return $jobData;
    }

}

$job = new Job();
$jobData = $job->getAllJob();
$allJobs = $job->getEverything();