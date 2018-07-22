<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>message</title>
</head>
<body>

<h1>Logout</h1>

</body>
</html>

<?php
    if(isset($_SESSION['username']) && !empty($_SESSION['username']))
    {
        echo "logging you out";
        session_destroy();
        header("refresh:5;url=index.php");
    }
?>