<?php
require_once ('protected_access_check.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Baris Cem Baykara">
    <title>Create Job Listing</title>
</head>

<body>
    <form id="postJob" action="application/postJob.php" method="POST">
        <p>
            <label>title: </label>
            <input type="text" name="data[title]"/>
        <p>
        <p>
            <label>body: </label>
            <input type="text" name="data[body]"/>

        <p>
            <input type="reset" name="btnClear" value="Clear" class="button"/>
            <input type="submit" name="btnSubmit" value="Post" class="button marL10"/>
        <p>
    </form>
</body>

</html>