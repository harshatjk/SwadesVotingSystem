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

    <div class="row" id="applicantDetails">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
        <div class="userDetails">
          <form class="form-horizontal" method="post" action="registrationSucess.php" onsubmit="return validate()">
            <p id="formError" style="border-style:solid; border-color:#FF0000;">All the fields with * are mandatory</p>
            <div class="form-group">
              <label for="firstName" class="control-label col-xs-4">First Name:</label>
              <div class="col-xs-8">
                <input type="text" class="form-control" id="firstName" name="firstName"
                placeholder="First Name">
              </div>
            </div>
            <div class="form-group">
              <label for="lastName" class="control-label col-xs-4">Last Name:</label>
              <div class="col-xs-8">
                <input type="text" class="form-control" id="lastName" name="lastName"
                placeholder="Last Name">
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="control-label col-xs-4">Email ID:</label>
              <div class="col-xs-8">
                <input type="email" class="form-control" id="email" name="email"
                placeholder="SCU Email ID">
              </div>
            </div>
            <div class="form-group">
              <label for="phone" class="control-label col-xs-4">Contact:</label>
              <div class="col-xs-8">
                <input type="number" class="form-control" id="phone" name="phone"
                placeholder="Contact Number">
              </div>
            </div>

              <div class="form-group">
                <label for="name">Why do you want to be part of SWADES board?</label>
                <textarea class="form-control" rows="3"></textarea>
              </div>


              <div class="form-group">
                <label for="name">Describe some unique qualities in you that makes you standout among others?</label>
                <textarea class="form-control" rows="3"></textarea>
              </div>

            <label class="control-label col-xs-9">Position's Interested In:</label>
            <br><br>
              <div class="form-horizontal" id="checkboxes">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> President
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Vice President
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Tresurar
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Web Master
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Event Coordinator
                </label>
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
