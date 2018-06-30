<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        echo "<center>List of classes for Summer 2018</center>";
        $dsn = 'mysql:host=localhost;dbname=list of classes';
        $username = 'root';
        $password = '';
        try{
            $con = new PDO($dsn, $username, $password);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            echo 'Not Connected to the database ' . $ex->getMessage();
        }
        
        $stmt = $con->prepare('SELECT * FROM classlist');
        $stmt->execute();
        $classlist = $stmt->fetchAll();
        
        foreach ($classlist as $user)
        {
            echo $user["Subject"] . $user["ID"] . "\t" . $user["Title"] . 
                    "\t" . $user["CreditHours"] . "\t" . $user["Instructor"] . 
                    "\t" . $user["CRN"] . "\t" . $user["Days"] . "\t" . 
                    $user["StartDate"] . "\t" . $user["EndDate"] . "\t" . 
                    $user["Location"] . "\t" . $user["Campus"] . '<br>';
        }
        
        ?>
        
        
        
        <?php
        /*
        $con = mysqli_connect("localhost", "root", "");
        if(!$con)
        {
            exit('there is an error connecting to the database (' . 
            mysqli_connect_errno() . ') ' . mysqli_connect_error());
        }
        mysqli_set_charset($con, 'utf-8');
        mysqli_select_db($con, "classlist");
        
        $query = "SELECT * FROM classlist WHERE Instructor = 'Yuan Long'";
        $result = mysqli_query($con, $query);
         * 
         */
        
        /*
        $user = mysqli_real_escape_string($con, htmlentities($_GET["root"]));
        $query = mysqli_query($con, "SELECT * FROM classlist LIMIT 100");
        
        $row = mysqli_fetch_row($query);
        $rowID = $row[0];
        */
        /*
        while ($row = mysqli_fetch_array($result))
        {
            echo'<tr>';
            foreach ($row as $field)
            {
                echo '<td>' . htmlspecialchars($field) . '</td>';
            }
            echo '</tr>';
        }
         */
        
        /*
        $query = mysqli_query($con, 'SELECT * FROM classlist LIMIT 100');
        $result = mysqli_query($con, $query);
        print $result;
         */
        
        ?>
        <!--
        <table border="black">
            <tr>
                <th>Title</th>
                <th>CreditHours</th>
                <th>Instructor</th>
                <th>CRN</th>
            </tr>
        </table>
        -->
    </body>
</html>
