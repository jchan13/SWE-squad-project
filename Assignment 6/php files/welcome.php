<?php
session_start();
if(isset($_SESSION['log']))
{
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<h1>welcome.</h1>
<a href="index.php" >main page</a>
</body>
</html>


<?php
}
?>