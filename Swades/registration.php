<?php
// Turn off error reporting
error_reporting(0);
header("Location: index.php");

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="ISO-8859-1">
  <title>Registration</title>
  <link rel="stylesheet"
  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script
  src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script
  src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/index.css" type="text/css">
  <link rel="stylesheet" href="css/registration.css" type="text/css">
  <link rel="shortcut icon" href="../images/logo/favicon.ico">

  <script>
  $(document).ready(function () {
    $('.applyPosition :checkbox').change(function () {
      var $cs=$(this).closest('.applyPosition').find(':checkbox:checked');
      if ($cs.length > 3) {
        this.checked=false;
      }
    });
  });
  </script>
</head>

<body>
  <div class="container" style="background-image: url('images/SwadesOpacity.jpg'); background-size: 100% 700px; height:600px;">

    <div class="row" id="applicantDetails">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
        <div class="userDetails">
          <form class="form-horizontal" method="post" action="registrationSucess.php" onsubmit="return validate()">
            <p id="formError" style="border-style:solid; border-color:#FF0000;"><b>All the fields with * are mandatory</b>
              </p>
                <div class="form-group">
                  <label for="firstName" class="control-label col-xs-4">* First Name:</label>
                  <div class="col-xs-8">
                    <input type="text" class="form-control" id="firstName" name="firstName"
                    placeholder="First Name" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="lastName" class="control-label col-xs-4">* Last Name:</label>
                  <div class="col-xs-8">
                    <input type="text" class="form-control" id="lastName" name="lastName"
                    placeholder="Last Name" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="scuid" class="control-label col-xs-4">* SCU ID:</label>
                  <div class="col-xs-8">
                    <input type="number" class="form-control" id="scuid" name="scuid"
                    placeholder="SCU ID" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="email" class="control-label col-xs-4">* Email ID:</label>
                  <div class="col-xs-8">
                    <input type="email" class="form-control" id="email" name="email"
                    placeholder="SCU Email ID" required>
                  </div>
                </div>


                <div class="form-group">
                  <label for="phone" class="control-label col-xs-4">* Contact:</label>
                  <div class="col-xs-8">
                    <input type="number" class="form-control" id="phone" name="phone"
                    placeholder="Contact Number" min="1000000000" max="9999999999" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="name">Why do you want to be part of SWADES board?<br>(30 word limit)</label>
                  <textarea class="form-control" rows="3" name="reason" maxlength="200"></textarea>
                </div>

                <label class="control-label col-xs-9">* Position Interested In:</label>
                <br><br>

                <div class="row">
                  <div class="col-xs-6 col-xs-offset-3 text-center">
                      <div class="form-group">
                        <select class="form-control" id="positionSelect" name="positionSelect" required>
                          <option value="" disabled selected>Want to be a ...</option>
                          <option value="President">President</option>
                          <option value="Vice President">Vice President</option>
                          <option value="General Secretary">General Secretary</option>
                          <option value="Cultural Secretary">Cultural Secretary</option>
                          <option value="Sports Secretary">Sports Secretary</option>
                          <option value="Event Coordinator">Event Coordinator</option>
                        </select>
                      </div>
                  </div>


                <div class="form-group">
                  <label for="name">Describe some unique qualities in you that makes you standout among others for the position?<br>(30 word limit)</label>
                  <textarea class="form-control" rows="3" name="uquality" maxlength="200"></textarea>
                </div>
</div>
<br>
<button type="submit" class="btn btn-default btn-md" name="saveApplicantDetails">Save Details</button>
<div id="changepassworderror">
</div>
</form>
</div>
</div>
<div class="col-sm-4"></div>
</div>
</div>
<script src="js/validation.js"></script>
</body>
</html>
