<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>message</title>
</head>
<body>

<h1>Username and password have been created successfully.</h1>

</body>
</html>

<?php
    echo 'Hello, ' . htmlspecialchars($_GET['username']);
    echo "<br>";
    echo 'E-mail address that has been registered is ' . htmlspecialchars($_GET['email']) . "<br>";
    
    
    
    $servername = "localhost";
    $un = "phpsqlhtml";
    $pw = "password";
    $dbname = "class_scheduler";
    $conn = mysqli_connect($servername, $un, $pw, $dbname);
    
    if($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if(isset($_GET['email']))
    {
        if(isset($_GET['username']))
        {
            if(isset($_GET['password']))
            {
                $email=$_GET["email"];
                $username=$_GET["username"];
                $password=$_GET["password"];

                $_SESSION["username"]=$username;
                $_SESSION["password"]=$password;

                //echo $email;
                //echo $username;
                //echo $password;
                $query = "INSERT INTO login (email, username, password) VALUES ('$email', '$username', '$password')";
                if($conn->multi_query($query) == TRUE)
                {
                    echo "New records created successfully <br>";
                }
                else
                {
                    echo "Error: " . $query . "<br>" . $conn->error;
                }
            }
        }
    }
    
    echo 'Redirecting in 5 seconds';
    
    header("refresh:5;url=index.php");
?>