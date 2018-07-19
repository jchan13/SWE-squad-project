<?php
session_start();
$_SESSION["crnarray"] = array();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<center><h2>Class Scheduler</h2></center>";
        echo 'Current PHP version: ' . phpversion();
        ?>
        <!--
        <button onclick="location.href='http://google.com'"type="button">
            View list of classes</button>
        -->
        <button onclick="location.href='TableofClasses.php'"type="button">
            View list of classes
        </button>
        <button onclick="location.href='AddRemoveCourses.php'"type="button">
            Add or remove classes
        </button>
        <button onclick="location.href='SignUP.php' "type="button">
            Sign up
        </button>
        <button onclick="location.href='LogIN.php'"type="button">
            Login
        </button>
        <button onclick="location.href='testing2.php'"type="button">
            for testing purposes
        </button>
        <button onclick="location.href='indexTesting.php'"type="button">
            for testing the usernames and passwords
        </button>
    </body>
</html>
