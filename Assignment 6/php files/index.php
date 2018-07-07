<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>GSU Student Helper</title>

<style>

/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 510px;
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
    height: 100%;
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
    width: 75%;
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

<!-- Meet the team -->
html {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
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

<div class="tab">
  <button class="tablinks" onclick="openOperation(event, 'Schedule')" id="defaultOpen">Schedule Generator</button>
  <button class="tablinks" onclick="openOperation(event, 'Route')">Route Generator</button>
  <button class="tablinks" onclick="openOperation(event, 'Grade')">Final Grade Calculator</button>
  <button class="tablinks" onclick="openOperation(event, 'GPA')">GPA Calculator</button>
  <button class="tablinks" onclick="openOperation(event, 'Weather')">Check the Weather</button>
  <button class="tablinks" onclick="openOperation(event, 'SWE')">About Our Project</button>
  <button class="tablinks" onclick="openOperation(event, 'Team')">Meet The Team</button>
</div>

<div id="Schedule" class="tabcontent">
  <h3>Schedule Generator</h3>
  <img src="http://swesquad.solutions/Georgia_State_Athletics_logo.svg.png" height="125">
  <p>The Schedule Generator will generate all possible schedules for students, based on their semester and course selections. In the future, we hope to add the feature to add times where they are not available.</p><br />
  <button class="tablinks" onclick="window.location.href='http://swesquad.solutions/AddRemoveCoursesTEST.php'">Let's go!</button>
</div>

<div id="Route" class="tabcontent">
  <h3>Route Generator</h3>
  <img src="http://swesquad.solutions/Georgia_State_Athletics_logo.svg.png" height="125">
  <p>The Route Generator lets the student pick their starting point and ending point from drop down lists. Location options are sorted by transportation, housing, academics, and other important locations. Markers on the map are clickable to see each direction step. <b>Note: The directions generated are for walking routes.</b></p><br /> 
  <button class="tablinks" onclick="window.location.href='http://swesquad.solutions/RouteGenerator.html'">Let's go!</button>
</div>

<div id="Grade" class="tabcontent">
  <h3>Final Grade Calculator</h3>
  <img src="http://swesquad.solutions/Georgia_State_Athletics_logo.svg.png" height="125">
  <p>The Final Grade Calculator will calculate the grade the student must get on a final exam/project to pass with a final grade of A, B, or C. It takes the final course grade breakdown(percentages) for the class items such as homework, quizzes, tests/exams, attendence, and a final exam/project. Then using the grades the student has recieved for the semester, only excluding the final exam/project grade,calculates the grades needed to achieve a final grade. This is usually found on the professor's website and/or syllabus.</p><br />
  <button class="tablinks" onclick="window.location.href='http://swesquad.solutions/RouteGenerator.html'">Let's go!</button>
</div>

<div id="GPA" class="tabcontent">
  <h3>GPA Calculator</h3>
  <img src="http://swesquad.solutions/Georgia_State_Athletics_logo.svg.png" height="125">
  <p>The GPA Calculator will calculate the student's current GPA for the semester. It takes the credit hours for the course and the letter grade received for each course to calculate the GPA.</p><br />
  <button class="tablinks" onclick="window.location.href='http://swesquad.solutions/GPAcalculator.html'">Let's go!</button>
</div>

<div id="Weather" class="tabcontent">
  <h3>Check the Weather</h3>
  <img src="http://swesquad.solutions/Georgia_State_Athletics_logo.svg.png" height="125">
  <p>Be prepared for your day on campus! Don't get caught in the rain with out an umbrella. </p><br />
  <button class="tablinks" onclick="window.location.href='http://swesquad.solutions/GPAcalculator.html'">Let's go!</button>
</div>

<div id="SWE" class="tabcontent">
  <h3>About Our Project</h3>
  <img src="http://swesquad.solutions/grad.jpg" height="200">
  <p>Created by students for students to help us all succeed!<br /><br /> 
  <p>Links to our documentation:<br /><br /> 
      <a href="https://github.com/jchan13/SWE-squad-project"><img src="http://swesquad.solutions/github.png" alt="git icon" height="40"></a>       
      <a href="https://www.youtube.com/channel/UC9s6EVvN9Y49x_G7n9HTujw?view_as=subscriber">
      <img src="http://swesquad.solutions/youtube.png" alt="YT icon" height="40"></a><br />
      <img src="" alt=""><a href=""></a><br />
      <img src="" alt=""><a href=""></a><br />
  </p>
</div>

<div id="Team" class="tabcontent">
  <h3>Meet The Team</h3>
  <div class="row">
  <div class="column">
    <div class="card">
      <img src="http://swesquad.solutions/Georgia_State_Athletics_logo.svg.png" alt="Jodie" style="width:100%">
      <div class="container">
        <h2>Jodie Chan</h2>
        <p class="title">Team Leader, Developer & Documentation</p>
        <p>CS Major, concentration in Networks. I'm a Security Knowledge Developer Co-Op at IBM Security. In my spare time, I'm trying to build my brand as a Twitch Streamer. I enjoy learning about and implementing cybersecurity, virtualization, data visualization and new programming languages! </p>
        <p>
          <center>
            <button class="tablinks" onClick="parent.location='mailto:jodiechan13@gmail.com?subject=Contact Me'">Contact Me</button>
          </center>
        </p>
      </div>
    </div>
  </div>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="http://swesquad.solutions/Georgia_State_Athletics_logo.svg.png" alt="Saher" style="width:100%">
      <div class="container">
        <h2>Saher Ahmad</h2>
        <p class="title">Back-end Developer & Documentation</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>
          <center>
            <button class="tablinks" onClick="parent.location='mailto:jodiechan13@gmail.com?subject=Contact Me'">Contact Me</button>
          </center>
        </p>
      </div>
    </div>
  </div>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="http://swesquad.solutions/Georgia_State_Athletics_logo.svg.png" alt="Toju" style="width:100%">
      <div class="container">
        <h2>Toritseju Mikie</h2>
        <p class="title">Team Coordinator & Back-end Developer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>
          <center>
            <button class="tablinks" onClick="parent.location='mailto:jodiechan13@gmail.com?subject=Contact Me'">Contact Me</button>
          </center>
        </p>
      </div>
    </div>
  </div>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="http://swesquad.solutions/Georgia_State_Athletics_logo.svg.png" alt="Woo" style="width:100%">
      <div class="container">
        <h2>Woo Jin Park</h2>
        <p class="title">Back-end Developer & Video Creation</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>
          <center>
            <button class="tablinks" onClick="parent.location='mailto:jodiechan13@gmail.com?subject=Contact Me'">Contact Me</button>
          </center>
        </p>
      </div>
    </div>
  </div>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="http://swesquad.solutions/Georgia_State_Athletics_logo.svg.png" alt="Harry" style="width:100%">
      <div class="container">
        <h2>Harry Nguyen</h2>
        <p class="title">Back-end developer & Video Creation</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>
          <center>
            <button class="tablinks" onClick="parent.location='mailto:jodiechan13@gmail.com?subject=Contact Me'">Contact Me</button>
          </center>
        </p>
      </div>
    </div>
  </div>
</div>



<script>
function openOperation(evt, operationName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(operationName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
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
