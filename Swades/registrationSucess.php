<?php
include "modules.php";
header("Location: index.php");

error_reporting(0);
if($_SERVER["REQUEST_METHOD"] == "POST"){
//$FirstName = $_POST['firstName'];
//echo $FirstName;
//$pos = $_POST['positions'];
//print_r ($pos);
//$pos = "";
  $position=implode(',', $_POST['positions']);
   register($_POST['firstName'],$_POST['lastName'],$_POST['scuid'],$_POST['email'],$_POST['phone'],$_POST['reason'],$_POST['uquality'],$_POST['positionSelect']);
//foreach($_POST['positions'] as $position){
  //echo $position;
}
//echo $q1;

?>

<?php
    $to = $_POST['email'];
	$subject = "Your candidature has been reserved for the post of ".$_POST['positionSelect'];
	$message .= "Dear ".$_POST["firstName"].",<br><br>";
        $message .= "Thank you for applying to be a part of Swades 2015-16 Board. Kindly preserve this email for your records";
        $message .= "<br><br>Stay tuned on to our Swades Facebook Group for more updates<br><br>Regards,<br>Team Swades 2014-2015<br><br>";
        $message .= "<a href=https://www.facebook.com/groups/SwadesAtSCU/>SCU SWADES Facebook</a><br>";
        $message .= "<a href=https://plus.google.com/+SwadesTheISO/>SCU Swades Google+</a><br>";
        $message .= "<img src =https://lh3.googleusercontent.com/-1cfsoqL7xCo/VD27Id-CKQI/AAAAAAAAAPQ/3jgybNAU158/s745-no/swades%2Blogo.png width=200px height=200px/>";
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: '."scu.swades@gmail.com"."\r\n";
        
    // Append $ccString to $headers to send emails
    $headers .= 'Bcc: '."aganapathy@scu.edu".","."anand.ramchandani@gmail.com".","."harshatjk7@gmail.com".","."rsankarajayarama@scu.edu"."\r\n";

    mail($to,$subject,$message,$headers);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="ISO-8859-1">
  <title>Successful</title>
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
    <p id="successful">Registration Successful !! You're are now a contender for the post in Swades Board.</p>
    <p><center>Check your inbox for a confirmation email</center></p>
    <p id="bestWishes">"All The Best"</p>
  </div>
</body>
</html>
