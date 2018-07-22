

<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT * FROM subjects";
$results = $db_handle->runQuery($query);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<title>GSU Student Helper</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  
  <link href="css/bootstrap-select.min.css" rel="stylesheet" />
  <script src="js/bootstrap-select.min.js"></script>
	<script type="text/javascript" src="static/lib/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="static/lib/bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="static/lib/moment/moment.js"></script>
	<script type="text/javascript" src="static/js/ttg.js"></script>
	<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<style>
body{width:800px;font-family:calibri;}

.frmDronpDown {
	border: 1px solid 1c49ff;
	background-color:#d0d5d8;
	margin: 20px 0px;+
	padding:50px;
	border-radius:4px;}
.inputBox {
	margin: 10px;
	padding: 10px;
	border: 1c49ff 1px solid;
	border-radius: 4px;
	background-color: #FFF;
	width: 75%;}
	
.row{
	padding-top:10px;
	padding-bottom:10px;
	padding-left: 50px;
	}

table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
}
</style>

<script>
function getCourses(val) {
	$.ajax({
	type: "POST",
	url: "getCourses.php",
	data:'subject_id='+val,
	success: function(data){
		$("#course-list").html(data);
		getOffering();
	}
	});
}


function getOffering(val) {
	$.ajax({
	type: "POST",
	url: "getOffering.php",
	data:'course_id='+val,
	success: function(data){
		$("#result_table").empty().html(data);
	}
	});
}

/*function addOffering(val) {
	$.ajax({
	type: "POST",
	url: "addOffering.php",
	data:'course_id='+val,
	success: function(data){
		$("#offering_table").empty().html(data);
	}
	});
}

function getOffering() {
	$.ajax({
	 url:"getOffering.php",
	 method:"POST",
	 data:'course_id='+val,
	 success:function(data){
		$('tbody').html(data);
	 }
	})
	}
	
$('#course').change(function(){
	$('hidden_subject').val($('#course').val());
		var query = $('#course').val();
			load_data(query);
			});
			});*/	

</script>
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
      
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

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
  
  <form class="modal-content animate" action="/action_page2.php">
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


<div class="frmDronpDown">
<div class="row">
<label>Subject:</label><br/>
<select name="subject" id="subject-list" class="inputBox" onChange="getCourses(this.value);">
<option value disabled selected>Select Subject</option>
<?php
foreach($results as $subjects) {
?>
<option value="<?php echo $subjects["id"]; ?>"><?php echo $subjects["subject_name"]; ?></option>
<?php
}
?>
</select>
</div>

<div class="row">
<label>Course:</label><br/>
<select name="course" id="course-list" class="inputBox" onChange="getOffering(this.value);">
<option value="">Select Course</option>
</select>
</div>


</div>

<div id="textHint"><b>Available offerings will be listed here...</b></div>
<div id="">
<table id ="result_table" class="table table-striped table-bordered">
     <thead>
      <tr>
	<th>CRN</th>
	<th>Course Name</th>
	<th>Credit Hours</th>
	<th>Instructor</th>
	<th>Days</th>
	<th>Start Date</th>
	<th>End Date</th>
	<th>Start Time</th>
	<th>End Time</th>
	<th>Location</th>
	<th>Campus</th>
      </tr>
     </thead>
     <tbody>
     </tbody>
    </table></div>


<div id="textHint"><b>Selected offerings will be listed here...</b></div>
<div id="">
<table id ="offering_table" class="table table-striped table-bordered">
     <thead>
      <tr>
	<th>CRN</th>
	<th>Course Name</th>
	<th>Credit Hours</th>
	<th>Instructor</th>
	<th>Days</th>
	<th>Start Date</th>
	<th>End Date</th>
	<th>Start Time</th>
	<th>End Time</th>
	<th>Location</th>
	<th>Campus</th>
      </tr>
     </thead>
     <tbody>

     </tbody>
    </table></div>

<script> 
function addOffering()
            {
                var table1 = document.getElementById("result_table"),
                    table2 = document.getElementById("offering_table"),
                    checkboxes = document.getElementsByName("selectOffering");
            console.log("Val1 = " + checkboxes.length);
                 for(var i = 0; i < checkboxes.length; i++)
                     if(checkboxes[i].checked)
                        {
                            // create new row and cells
                            var newRow = table2.insertRow(table2.length),
                                cell1 = newRow.insertCell(0),
                                cell2 = newRow.insertCell(1),
                                cell3 = newRow.insertCell(2),
                                cell4 = newRow.insertCell(3);
                                cell5 = newRow.insertCell(4);
                                cell6 = newRow.insertCell(5);
                                cell7 = newRow.insertCell(6);
                                cell8 = newRow.insertCell(7);
                                cell9 = newRow.insertCell(8);
                                cell10 = newRow.insertCell(9);
                                cell11 = newRow.insertCell(10);
                                cell12 = newRow.insertCell(11);
                                //cell13 = newRow.insertCell(12);
                            // add values to the cells
                            cell1.innerHTML = table1.rows[i+1].cells[0].innerHTML;
                            cell2.innerHTML = table1.rows[i+1].cells[1].innerHTML;
                            cell3.innerHTML = table1.rows[i+1].cells[2].innerHTML;
                            cell4.innerHTML = table1.rows[i+1].cells[3].innerHTML;
                            cell5.innerHTML = table1.rows[i+1].cells[4].innerHTML;
                            cell6.innerHTML = table1.rows[i+1].cells[5].innerHTML;
                            cell7.innerHTML = table1.rows[i+1].cells[6].innerHTML;
                            cell8.innerHTML = table1.rows[i+1].cells[7].innerHTML;
                            cell9.innerHTML = table1.rows[i+1].cells[8].innerHTML;
                            cell10.innerHTML = table1.rows[i+1].cells[9].innerHTML;
                            cell11.innerHTML = table1.rows[i+1].cells[10].innerHTML;
                            cell12.innerHTML = table1.rows[i+1].cells[11].innerHTML;
                           //cell13.innerHTML = "<input type="checkbox" name="selectOffering2">";

                            var index = table1.rows[i+1].rowIndex;
                            table1.deleteRow(index);

                            i--;
                           console.log(checkboxes.length);
                        }
            }
            

</script>

</body>
</html>