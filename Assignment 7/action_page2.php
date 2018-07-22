<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>message</title>
</head>
<body>

<h1>Login</h1>

</body>
</html>

<?php
    echo 'Hello, ' . htmlspecialchars($_GET['uname']);
    echo "<br>";
    
    $servername = "localhost";
    $un = "phpsqlhtml";
    $pw = "password";
    $dbname = "class_scheduler";
    $conn = mysqli_connect($servername, $un, $pw, $dbname);
    
    if($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $username=$_GET['uname'];
    $password=$_GET['psw'];
    //echo $username . "<br>";
    //echo $password . "<br>";
    
    //$query = "SELECT username, password from login";
    $query = "SELECT username, password from login WHERE username = '$username' and password = '$password'";
    
    $result = $conn-> query($query);
    $row= mysqli_fetch_array($result);
    //echo $row;
    
    
    if($result-> num_rows > 0)
    {
        echo "<br>We were able to find the login information. <br>";
        echo "Logging you in... wait 5 seconds";
        $_SESSION['username']=$username;
    }
    else
    {
        echo "We were not able to find an account with that username and password.";
        echo "Returning you to the home page... wait 5 seconds";
    }
    
    header("refresh:5;url=index.php");
    
    /*
    if($conn->multi_query($query) == TRUE)
    {
        echo "<br>We were able to find the login information. <br>";
        echo "Logging you in... wait 5 seconds";
    }
     * 
     */
    /*
    else
    {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
     * 
     */
?>