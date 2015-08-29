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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div calss="row">
      <p id="welcomePortal">Welcome to Swades Election Portal</p>
      <p id="tagLine">Your Vote, Your Voice, Be Heard !!!! </p>
    </div>
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <div class="navigation-button" id="navigation-button" >
          <a href="registration.php" class="btn btn-info btn-md" role="button" data-toggle="tooltip" title="All the people interested in being part of Swades board should click here.">Register to Contest</a>
          <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal" data-toggle="tooltip" title="Click here to know about the election process in detail.">Rules and Instructions</button>
          <a href="#" class="btn btn-info btn-md" role="button" data-toggle="tooltip" title="Login with your Facebook to vote.">Login to Vote</a>
        </div>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
      <div class="col-sm-10"></div>
      <div class="col-sm-2">
        <div class="followUs">
          <p>Follow us on:</p>
        <!--  <a target="_blank" title="follow me on Twitter" href="https://twitter.com/Era81Official"><img alt="follow me on Twitter" src="images/twiiter30x30.png" border=0></a> -->
          <a target="_blank" title="follow me on facebook" href="https://www.facebook.com/groups/SwadesAtSCU/"><img alt="follow me on facebook" src="images/facebook30x30.png" border=0></a>
      <!--     <a target="_blank" title="follow me on instagram" href="https://instagram.com/era81official/"><img alt="follow me on instagram" src="images/instagram30x30.png" border=0></a> -->
        </div>
      </div>
    </div>

  </div>

  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  <script src="js/timer.js"></script>
</body>
</html>
