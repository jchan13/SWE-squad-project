<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<title>GSU Student Helper</title>

<style>
p, h3, li {
	font-family: sans-serif;
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
<style type="text/css">
    .logout {
        background-color: #0230fc;
        color: white;
        text-decoration: none;
    }
</style>
<!-- <a href="logout.php" class="logout">Logout</a> -->

<?php
    
    if(isset($_SESSION['username']) && !empty($_SESSION['username']))
    {
        $username=$_SESSION['username'];
        echo "$username is logged in";
    ?>
    <p><a href="logout.php" class="logout">Logout</a></p>
    <?php
    }
?>


<!-- Responsive Header --> 
<div class="header" style="overflow: hidden; background-color: #f1f1f1; padding: 20 px 10px;">
  <a href="http://swesquad.solutions" class="logo" style="font-size: 25px; font-weight: bold;"><img src="http://swesquad.solutions/Logo.png" height="80"></a>
  <div class="header-right" style="float: right;">
    <a class="active" onclick="document.getElementById('id01').style.display='block'" style="float:left; color: white; text-align: center; padding: 12px; text-decoration: none; font-size: 18px; line-height: 25px; border-radius: 4px;" href="#signup">Sign Up</a>
    <a class="active" onclick="document.getElementById('id02').style.display='block'" style="float:left; color: white; text-align: center; padding: 12px; text-decoration: none; font-size: 18px; line-height: 25px; border-radius: 4px;" href="#login">Login<br /></a>
    <a class="active" onclick="document.getElementById('id03').style.display='block'" style="float:left; color: white; text-align: center; padding: 12px; text-decoration: none; font-size: 18px; line-height: 25px; border-radius: 4px;" href="indexTesting.php">Logout</a>
  </div>
</div>

<div class="tab">

  <button class="tablinks" onclick="openOperation(event, 'Schedule')" id="defaultOpen">Schedule Generator</button>
  <button class="tablinks" onclick="openOperation(event, 'Route')">Route Generator</button>
  <button class="tablinks" onclick="openOperation(event, 'Grade')">Final Grade Calculator</button>
  <button class="tablinks" onclick="openOperation(event, 'GPA')">GPA Calculator</button>
  <button class="tablinks" onclick="openOperation(event, 'Future')">Future Features</button>
  <button class="tablinks" onclick="openOperation(event, 'SWE')">About Our Project</button>
  <button class="tablinks" onclick="openOperation(event, 'Team')">Meet The Team</button>
</div>


<div id="Schedule" class="tabcontent">
  <h3>Schedule Generator</h3>
  <img src="http://swesquad.solutions/Georgia_State_Athletics_logo.svg.png" height="125">
  <p>The Schedule Generator will generate all possible schedules for students, based on their semester and course selections. In the future, we hope to add the feature to add times where they are not available.</p><br />
  <button class="tablinks" onclick="window.location.href='http://swesquad.solutions/ScheduleGenerator.php'">Let's go!</button>
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
  <button class="tablinks" onclick="window.location.href='http://swesquad.solutions/FinalGradecalculator.html'">Let's go!</button>
</div>

<div id="GPA" class="tabcontent">
  <h3>GPA Calculator</h3>
  <img src="http://swesquad.solutions/Georgia_State_Athletics_logo.svg.png" height="125">
  <p>The GPA Calculator will calculate the student's current GPA for the semester. It takes the credit hours for the course and the letter grade received for each course to calculate the GPA.</p><br />
  <button class="tablinks" onclick="window.location.href='http://swesquad.solutions/GPAcalculator.html'">Let's go!</button>
</div>

<div id="Future" class="tabcontent">
  <h3>Future Features</h3>
  <img src="http://swesquad.solutions/Georgia_State_Athletics_logo.svg.png" height="125">
  <ul>
  <li>Weather Forecast</li>
  <li>GSU Bus Schedules</li>
  <li>Marta Rail Schedules</li>
  </ul>

  <p>Have an idea to improve our application?</p>
  <button class="tablinks" onClick="parent.location='mailto:support@swesquad.solutions?subject=Send us a suggestion'">Send us suggestions!</button>
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
        <p>I'm a student majoring in Computer Science with a concentration in Computer Information Systems at Georgia State University. I have knowledge in Java, CSS, HTML, and C. I have worked with linux/operating systems and am skilled in the department of reports and data analysis and documentation. I've collaborated with group members to plan, write, and delegate tasks in order to present a comprehensive report and code on programming projects for web servers.</p>
                <p>
          <center>
            <button class="tablinks" onClick="parent.location='mailto:support@swesquad.solutions?subject=Contact Me'">Contact Me</button>
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
        <p>I am currently a student at Georgia State University with Computer Science being my major. I also work at RAM-Tech PC Solutions as an intern. My job there is to repair computers and remove viruses, remote support, configure networks and printers for businesses, and setting up and configuring servers. I am knowledgeable in C/C++, Java, and HTML. I have experience with Netbeans IDE and Visual Studio. I can also do video editing with Sony Vegas. My hobbies include playing video games, and reading newspaper articles.</p>
                <p>
          <center>
            <button class="tablinks" onClick="parent.location='mailto:tojumikie@live.com?subject=Contact Me'">Contact Me</button>
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
        <p>I am currently a student at Georgia State University as a Computer Science major. I am also currently working at Chick-fil-A as a Front-Counter Coordinator. I am knowledgeable in Java and know basic MASM programming languages. I am knowledgeable in Adobe Premiere and know the basics in Adobe After Effects and Adobe Photoshop. Also, I am positive and enjoy working with people and making connections beyond the workplace with my team.
</p>
                <p>
          <center>
            <button class="tablinks" onClick="parent.location='mailto:parkeugene96@gmail.com?subject=Contact Me'">Contact Me</button>
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
        <p>I am a student at Georgia State University. My major is Chemistry and Computer Science. I am knowledge in Java, JavaScript, basic HTML/CSS, Microsoft Office, Adobe Lightroom, Adobe Premiere and Photoshop CC. I currently work for Eastern Data, Inc. as an IT and Accounting Assistant. My job is to assemble computer components,  diagnosed trouble shooting for any failure, gathered company information, and received incoming shipment and upload into database.
</p>
                <p>
          <center>
            <button class="tablinks" onClick="parent.location='mailto:hnqtkd@gmail.com?subject=Contact Me'">Contact Me</button>
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
