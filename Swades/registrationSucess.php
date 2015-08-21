<?php
include "modules.php";
error_reporting(0);
if($_SERVER["REQUEST_METHOD"] == "POST"){
//$FirstName = $_POST['firstName'];
//echo $FirstName;
//$pos = $_POST['positions'];
//print_r ($pos);
//$pos = "";
  $position=implode(',', $_POST['positions']);
   register($_POST['firstName'],$_POST['lastName'],$_POST['scuid'],$_POST['email'],$_POST['phone'],$_POST['reason'],$_POST['uquality'],$position);
//foreach($_POST['positions'] as $position){
  //echo $position;
}
//echo $q1;

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="ISO-8859-1">
  <title>Registeration</title>
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
    <p>Registration Sucessful</p>
  </div>
</body>
</html>
