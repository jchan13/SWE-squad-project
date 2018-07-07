<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>List of classes for Summer 2018</title>
        <style>
            table
            {
                border-collapse: collapse;
                width: 100%;
                color: deeppink;
                font-family: sans-serif;
                font-size: 14px;
                text-align: left;
            }
            th
            {
                background-color: blue;
                color: white;
                font-size: 15px;
            }
            tr:nth-child(4n) {background: #f2f2f2};
        </style>
    </head>
    <body>
        <!--
        <?php
        /*
        //echo "<center>List of classes for Summer 2018</center>";
        $dsn = 'mysql:host=localhost;dbname=class_scheduler';
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
        */
        ?>
        -->
        <table>
            <tr>
                <th>Subject</th>
                <th>ID</th>
                <th>Title</th>
                <th>CreditHours</th>
                <th>Instructor</th>
                <th>CRN</th>
                <th>Days</th>
                <th>StartDate</th>
                <th>EndDate</th>
                <th>Location</th>
                <th>Campus</th>
            </tr>
            <?php
                $conn = mysqli_connect("localhost", "root", "", "class_scheduler");
                if($conn-> connect_error)
                {
                    die("The connection has failed!" . $conn-> connect_error);
                }
                $sql = "SELECT * from classlist";
                $result = $conn-> query($sql);
                
                if($result-> num_rows > 0)
                {
                    while($row = $result-> fetch_assoc())
                    {
                        echo "<tr><td>" . $row["Subject"] . "</td><td>" . 
                                $row["ID"] . "</td><td>" . $row["Title"] . 
                                "</td><td>" . $row["CreditHours"] . "</td><td>" . 
                                $row["Instructor"] . "</td><td>" . $row["CRN"] . 
                                "</td><td>" . $row["Days"] . "</td><td>" . $row["StartDate"] . 
                                "</td><td>" . $row["EndDate"] . "</td><td>" . $row["Location"] . 
                                "</td><td>" . $row["Campus"] . "</td><tr>";
                    }
                    echo "</table>";
                }
                else
                {
                    "there is no result";
                }
                $conn-> close();
            ?>
        </table>
        
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
