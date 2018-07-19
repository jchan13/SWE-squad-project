<?php
require_once ("dbcontroller.php");
$db_handle = new DBController();

if (! empty($_POST["course_id"])) {
    $query = "SELECT * FROM offering WHERE courseID = '" . $_POST["course_id"] . "' order by crn asc";
    $results = $db_handle->runQuery($query);
}
    ?>
//<option value disabled selected>Select Offering</option>
<?php
/*
    echo "<table>";
    while($offering = mysqli_fetch_array($result)) {
    	echo "<tr>";
    	echo "<td>" . $offering['crn'] . "</td>";
    	echo "<td>" . $offering['courseID'] . "</td>";
    	echo "<td>" . $offering['Title'] . "</td>";
    	echo "<td>" . $offering['CreditHours'] . "</td>";
    	echo "<td>" . $offering['Instructor'] . "</td>";
    }
    echo "</table>";
*/
?>

<?php
    foreach ($results as $offering) {
          
	echo "<tr>";
    	echo "<td>" . $offering["crn"] . "</td>";
    	echo "<td>" . $offering["courseID"] . "</td>";
    	echo "<td>" . $offering["Title"] . "</td>";
    	echo "<td>" . $offering["CreditHours"] . "</td>";
    	echo "<td>" . $offering["Instructor"] . "</td>";
  	echo "</tr>";
  		}
  		echo "</table>";
        ?>
<?php
    if($results -> num_rows > 0)
    {
        while($row = $results -> fetch_assoc())
        {
        echo "<tr><td>" . $row["crn"] . "</td><td>" . $row["courseID"] . "</td><td>" . $row["Title"] . "</td><td>" . 
    	$row["CreditHours"] . "</td><td>" . $row["Instructor"] . "</td></tr>";
        }
  		echo "</table>";
    }
?>
        
<!--
<option value="<?php /* echo $offering["id"]; ?>"><?php echo $offering["crn"]; */ ?></option>
-->

<?php
/*
    }
}
else
{
    $output .= '
    <tr>
    	<td colspan="5" align="center">No Data Found</td>
    </tr>
    ';
}

echo $output;
 * 
 */ 

?>