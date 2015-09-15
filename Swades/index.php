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
          <button type="button" class="btn btn-info btn-md"  data-toggle="modal" data-target="#loginModal" data-toggle="tooltip" title="Login with your Facebook to vote.">Login to Vote</a>
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
            <h4 align="center">Important Information</h4>
          </div>
          <div class="modal-body">
            <p id="rules" style="color:red"><b>Swades 2014-15 board proudly announces and welcomes the registration for the new board
              contestants.</b></p>
              <p id="rules" style="color:red"> <b>Here are the instructions for the Swades 2015-16 nominees: </b></p>
              <p id="rules"><b>A Recap: Out of the 10 board positions, 4 will be open positions (Webmaster, Treasurer, Graphic Designer, PR & Media Manager) for which the registration announcement was already released. Now, it
                is time to shape the rest of the Swades 2015-16 board with the 6 electable positions.<b></p>
                  <p id="rules">1) Please nominate yourself for any ONE of the 6 positions listed in the form. Look for the position for
                    which you are most interested and passionate about.</p>
                    <p id="rules">2) The registration for all the 10 (including open and public electable) positions will be closed on

                      09/09/2015, Wednesday, 11:59 PM.</p>
                      <p id="rules">3) After the nominations are closed, the nominees for the 6 electable positions will be open for public

                        election.</p>
                        <p id="rules">4) The final list of 6 candidates will be identified ONLY based on vote numbers (top 6 candidates with

                          maximum votes).</p>
                          <p id="rules">5) Please note that the positions that you nominate yourself are meant to gauge your interest and

                            passion. However, you COULD end up in a different position at the end.</p>
                            <p id="rules">6) Titles are finalized ONLY based on internal voting. Once the 10-member board is identified, the new

                              team will internally vote among themselves to fix the titles for the 6 elected candidates.</p>
                              <p id="rules">7) Rules for internal voting will be disclosed ONLY to the new 10-member board.</p>
                              <p id="rules">Thank you very much for spending time in reading and understanding the rules. Swades 2014-15 is

                                excited and looking forward for the stronger and wiser new board.</p>

                              </div>
                              <div class="modal-footer">
                                <p align="center" style="color:red">For any queries, Please contact us at scu.swades@gmail.com</p>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>

                        <!-- Modal -->
                        <div id="loginModal" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 align="center">Important Information</h4>
                              </div>
                              <div class="modal-body">


                              </div>
                              <div class="modal-footer">
                                <p align="center" style="color:red">For any queries, Please contact us at scu.swades@gmail.com</p>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>


                        <script src="js/timer.js"></script>
                      </body>
                      </html>
