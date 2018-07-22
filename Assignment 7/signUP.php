<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <body>
            <form id = 'register' action="signUP.php" method='post'
                accept-charset="UTF-8">
                <fieldset >
                    <legend>
                        Sign up
                    </legend>
                    <label for='email' >E-mail address:</label>
                    <input type="text" name='email' id='email' maxlength="50"/>
                    
                    <label for='username' >username:</label>
                    <input type='text' name='username' id='username' maxlength="50"/>
                    
                    <label for="password" >password:</label>
                    <input type='password' name='password' id='password' maxlength="50"/>
                    
                    <input type="submit" name='submit' value='Submit' />
                </fieldset>  
            </form>
            <button onclick="location.href='LogIN.php'"type="button">
                Login
            </button>
        </body>
    </head>
</html>
<?php
    $servername = "localhost";
    $un = "root";
    $pw = "";
    $dbname = "class_scheduler";
        
        //$crn = intval($_GET['CRN']);
        
        $conn = mysqli_connect($servername, $un, $pw, $dbname);
        if($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
if(isset($_POST['email']))
{
    if(isset($_POST['username']))
    {
        if(isset($_POST['password']))
        {
            $email=$_POST["email"];
            $username=$_POST["username"];
            $password=$_POST["password"];
            
            $_SESSION["username"]=$username;
            $_SESSION["password"]=$password;
            
            //echo $email;
            //echo $username;
            //echo $password;
            $query = "INSERT INTO login (email, username, password) VALUES ('$email', '$username', '$password')";
            if($conn->multi_query($query) == TRUE)
            {
                echo "New records created successfully";
            }
            else
            {
                echo "Error: " . $query . "<br>" . $conn->error;
            }
        }
    }
}
?>
<?php
//session_destroy();
?>