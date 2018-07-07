<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 400px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5px auto; /* 15% from the top and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    /* Position it in the top right corner outside of the modal */
    position: absolute;
    right: 25px;
    top: 0; 
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

/* Close button on hover */
.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}


* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #0230fc;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 25%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;s
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}

<!-- Responsive Header -->
/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: white;
}

/* Style the active/current link*/
.header a.active {
  background-color: #0230fc;
  color: white;
}

</style>
</head>
<body>
<!-- Sign Up Pop up window -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<!-- Login Pop up window -->
<div id="id02" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<!-- Responsive Header --> 
<div class="header" style="overflow: hidden; background-color: #f1f1f1; padding: 20 px 10px;">
  <a href="http://swesquad.solutions" class="logo" style="font-size: 25px; font-weight: bold;"><img src="http://swesquad.solutions/Logo.png" height="80"></a>
  <div class="header-right" style="float: right;">
    <a class="active" onclick="document.getElementById('id01').style.display='block'" style="float:left; color: white; text-align: center; padding: 12px; text-decoration: none; font-size: 18px; line-height: 25px; border-radius: 4px;" href="#signup">Sign Up</a>
    <a class="active" onclick="document.getElementById('id02').style.display='block'" style="float:left; color: white; text-align: center; padding: 12px; text-decoration: none; font-size: 18px; line-height: 25px; border-radius: 4px;" href="#login">Login<br /></a>
  </div>
</div>

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
    
    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>




</body>
</html> 
