<?php
include "modules.php";
//error_reporting(0);
if($_SERVER["REQUEST_METHOD"] == "POST"){
  //$position=implode(',', $_POST['positions']);
  //echo $_POST['positions'][0];
  //echo $_POST['positions'][1];
  //echo $_POST['positions'][2];

  voting($_POST['quarterSelect'],$_POST['yearSelect'],$_POST['positions'][0],$_POST['positions'][1],$_POST['positions'][2]);
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
    <p>Thank you for voting !!</p>
    <p>Please contact us at scu.edu</p>
  </body>
  </html>
