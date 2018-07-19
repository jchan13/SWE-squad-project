<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <body>
        <h3 align="center">Add or Remove Courses</h3>
        <?php
        /*
        $data = array();
        array_push($data, "apple");
        print_r($data);
         */
        /*
            echo 'From here, courses can be added or removed. ';
            echo 'Enter the CRN of the class that you would like to be enrolled '
            . 'in';
            echo '';
            if(isset($_POST['name']))
            {
                echo $_POST['name'];
            }
         */
        ?>
        <form method="POST">
            <label>Enter CRN to add:</label>
            <input type="text" name="CRN"></br>
            <input type="submit" value="Submit">
        </form>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "class_scheduler";
        
        //$crn = intval($_GET['CRN']);
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        
        if(isset($_POST['CRN']))
        {
            $crn = intval($_POST['CRN']);
            echo $crn;
            echo '<br>';
            $sql = "INSERT INTO student_database SELECT * FROM classlist where CRN=$crn;";
            
            if($conn->multi_query($sql) === TRUE)
            {
                echo "New records created successfully";
            }
            else
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
        }
        
        /*
        if($conn->multi_query($sql) === TRUE)
        {
            echo "New records created successfully";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
         * 
         */
        
        
        
        
        
        /*
        $conn = mysqli_connect("localhost", "root", "", "class_scheduler");
        $sql = "INSERT INTO student_database (Subject, ID)"
                . "VALUES ('CSC', '1010)";
        
        
                //. "SELECT * FROM classlist "
                //. "WHERE CRN=55649";
        $result = mysqli_query($conn, $sql);
         * 
         */
        /*
            if(isset($_POST['CRN']))
            {
                echo $_POST['CRN'];
            }
            $file=fopen("CRN.txt","a");
            //$CRN=
            $data = array();
         * 
         */
            //$stack = array();
            //$data1 = array();
            //$data2 = array();
            //$crn=$_POST['CRN'];
            
            
            /*
            if(isset($_POST['CRN']))
            {
                $crn=$_POST['CRN'];
                //echo gettype($crn);
                $crn=(int) $_POST['CRN'];
                //echo gettype($crn);
                $conn = mysqli_connect("localhost", "root", "", "class_scheduler");
                //$sql = "SELECT * from classlist where CRN= $crn";
                $sql = "SELECT * FROM classlist where CRN=55649";
                $result = mysqli_query($conn, $sql);
                echo("<table>");
                $firstrow = true;
                while($row = mysqli_fetch_assoc($result))
                {
                    if($first_row)
                    {
                        $first_row = false;
                        echo '<tr>';
                        foreach($row as $key => $field)
                        {
                            echo '<th>' . htmlspecialchars($key) . '</th>';
                        }
                        echo '</tr>';
                    }
                    echo '</tr>';
                    foreach($row as $key => $field)
                    {
                        echo '<td>' . htmlspecialchars($field) . '</td>';
                    }
                    echo '</tr>';
                }
                echo("</table>");
                /*
                while ($row = mysqli_fetch_array($result))
                {
                    echo '<tr>';
                    foreach ($row as $field)
                    {
                        echo '<td>' . htmlspecialchars($field) . '</td>';
                    }
                    echo '</tr>';
                }
                 * 
                 */
                //$_SESSION["crnarray"] = $_POST['CRN'];
                //$_SESSION["crnarray"] [] = $_POST['CRN'];
                //print $result;
                //echo gettype($result);
                
                //echo $sql;
                
                //$_SESSION["CRN"] = $_POST["CRN"];
                //echo $_SESSION["crnarray"];
                //array_push($_SESSION["crnarray"], $_SESSION["CRN"]);
            //}
            
            //print_r($_SESSION["crnarray"]);
            //$space_separated= implode("<br>", $_SESSION["crnarray"]);
            //echo $space_separated;
            //$_SESSION["test"] = 100;
            //echo $_SESSION["test"];
            
            /*
            if(isset($_POST['name']))
            {
                $_SESSION['CRN'] = $_POST['CRN'];
                //array_push($data1, $_POST['CRN']);
                
                echo $_POST['CRN'];
                echo $_SESSION['CRN'];
            } 
             * 
             */
            //echo "<br>";
            //echo $_SESSION['CRN'];
            //print_r($_SESSION['CRN']);
            //print_r($data1);
            //$file= fopen("CRN.txt", "a");
            //fwrite($file, $_POST['CRN']);
            //fclose($file);
        ?>
        <form method="POST">
            <label>Enter CRN to remove:</label>
            <input type="text" name="CRN2"></br>
            <input type="submit" value="Submit">
        </form>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "class_scheduler";
        
        //$crn = intval($_GET['CRN']);
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        
        if (isset($_POST['CRN2']))
        {
            $crn = intval($_POST['CRN2']);
            echo $crn;
            //echo gettype($crn);
            echo '<br>';
            $sql = "DELETE FROM student_database where CRN=$crn;";
            
            if($conn->multi_query($sql) === TRUE)
            {
                echo "New records removed successfully";
            }
            else
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
        }
        
        ?>
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
                <th>StartTime</th>
                <th>EndTime</th>
                <th>Location</th>
                <th>Campus</th>
            </tr>
            <?php
                $conn = mysqli_connect("localhost", "root", "", "class_scheduler");
                if($conn-> connect_error)
                {
                    die("The connection has failed!" . $conn-> connect_error);
                }
                $sql = "SELECT * from student_database";
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
                                "</td><td>" . $row["EndDate"] . "</td><td>" . $row["StartTime"] . "</td><td>" . 
                                $row["EndTime"] . "</td><td>" . $row["Location"] . "</td><td>" . $row["Campus"] . "</td><tr>";
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

    </body>
</html>