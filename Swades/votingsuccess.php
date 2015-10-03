<?php
include "modules.php";
error_reporting(0);
session_start();
header("Location: index.php");

if(!isset($_SESSION['FBID'])){
  header("Location: index.php");
}
else if($_SERVER["REQUEST_METHOD"] == "POST"){
  //$position=implode(',', $_POST['positions']);
  //echo $_POST['positions'][0];
  //echo $_POST['positions'][1];
  //echo $_POST['positions'][2];
  
    voting($_SESSION['FBID'],$_SESSION['FULLNAME'],$_POST['vemail'],$_POST['quarterSelect'],$_POST['yearSelect'],$_POST['positions'][0],$_POST['positions'][1],$_POST['positions'][2],$_POST['positions'][3]);
    $to = $_POST['vemail'];
	$subject = "Thanks! Your vote counts...";
	$message .= "Dear ".$_SESSION['FULLNAME'].",<br><br>";
        $message .= "Thank you for taking the time out to vote for SCU Swades's 2015-16 Board. Kindly preserve this email for your records";
        $message .= "<br><br>Stay tuned on to our Swades Facebook Group for more updates<br><br>Regards,<br>Team Swades 2014-2015<br><br>";
        $message .= "<a href=https://www.facebook.com/groups/SwadesAtSCU/>SCU SWADES Facebook</a><br>";
        $message .= "<a href=https://plus.google.com/+SwadesTheISO/>SCU Swades Google+</a><br>";
        $message .= "<img src =https://lh3.googleusercontent.com/-1cfsoqL7xCo/VD27Id-CKQI/AAAAAAAAAPQ/3jgybNAU158/s745-no/swades%2Blogo.png width=200px height=200px/>";
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: '."scu.swades@gmail.com"."\r\n";
        
    mail($to,$subject,$message,$headers);
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="ISO-8859-1">
  <title>Voting Completed</title>
  <link rel="stylesheet"
  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script
  src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script
  src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/index.css" type="text/css">
  <link rel="stylesheet" href="css/registration.css" type="text/css">
</head>
<body>
  <div class="container" style="background-image: url('images/SwadesOpacity.jpg'); background-size: 100% 700px; height:600px;">
    <a href="voting/logout.php" id = "logoutbtn" class="btn btn-info btn-md" role="button" data-toggle="tooltip" title="Logout">Logout</a>
  <div class="container">
    <p id="votingThanks">Thank you for voting. Follow us on Facebook for more updates.</p>
  </body>  </html>
