<?php
        session_start();
        $_SESSION['FBID'] = NULL;
        $_SESSION['FULLNAME'] = NULL;
        session_unset();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="ISO-8859-1">
  <title>Error Page</title>
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
    <p id="notAgain">Thank you for your Interest !! You have already voted once and won't be able to do it again.<br>
    Please logout from your Facebook account and try again if you haven't voted yet.</p>
    <p id="contactUs">For any queries, Please contact us at scu.swades@gmail.com</p>
    <div class="buttonHolder">
      <a href="index.php" class="btn btn-info btn-md" role="button" data-toggle="tooltip" title=" Go to Home Page">Home</a>
    </div>
  </body>
  </html>