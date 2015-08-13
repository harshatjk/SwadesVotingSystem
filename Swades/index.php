<!DOCTYPE html>
<html>
<head>
  <meta charset="ISO-8859-1">
  <title>Welcome to Swades Election Portal</title>
  <link rel="stylesheet"
  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script
  src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script
  src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/index.css" type="text/css">
</head>

<body>
  <div class="container" style="background-image: url('images/SwadesOpacity.jpg'); background-size: 100% 700px; height:600px;">
    <div class="row">
    <p id="registrationTimer">Applicant registration Ends in:</p>
    <div id="countdown" ></div><!-- /#Countdown Div -->
  </div>
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
        <div class="navigation-button" id="navigation-button" >
          <a href="registration.php" class="btn btn-info btn-md" role="button">Applicants</a>
          <a href="#" class="btn btn-info btn-md" role="button">Members</a>
        </div>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>
  <script src="js/timer.js"></script>
</body>
</html>
