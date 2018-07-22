<?php
//include("Config.php");
session_start();
$myusername=$_SESSION['username'];
$mypassword=$_SESSION['password'];
?>
<?php
$db = mysqli_connect('localhost', 'root', '', 'class_scheduler');
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //$myusername = mysqli_real_escape_string($db, $_POST['username']);
    //$mypassword = mysqli_real_escape_string($db, $_POST['password']);
    
    $sql = "SELECT * FROM login WHERE username = '$myusername' and password = '$mypassword'";
    //$sql = "SELECT unique_id FROM login WHERE username = 'tmikie1' and password = 'password'";
    $result = mysqli_query($db, $sql);
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //$active = $row['active'];
    $count = mysqli_num_rows($result);
    
    if($count == 1)
    {
        echo "login was successful";
        $_SESSION['log']=1;
        //session_register("myusername");
        //$_SESSION['login_user'] = $myusername;
        
        header("location: welcome.php");
    }
    else
    {
        $error = "username or password is incorrect";
    }
}
?>
<html>
    <head>
        <title>Login Page</title>
    <form action="" method="post">
        <label>username:</label><input type = "text" name="username"/>
        <label>password:</label><input type = "password" name="password"/>
        <input type = "submit" value ="Submit"/><br />
    </form>
    </head>
</html>


