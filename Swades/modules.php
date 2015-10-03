<?php
include 'DataBaseConnection.php';

function register($firstname,$lastname,$scuid,$email,$phone,$reason,$uniqueness,$positions){
  $conn = dbConnection();
  $sql = "INSERT INTO registration (firstname, lastname, scuid, emailid, phone, reason, uniqueness, positions)
  VALUES ('$firstname', '$lastname', '$scuid' , '$email', '$phone', '$reason','$uniqueness', '$positions' )";

  if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    //session_impl($email,$password);
  } else {
    //  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}


function voting($fbid,$fbfullname,$femail,$quarter,$year,$choiceone,$choicetwo,$choicethree,$choicefour){
  $conn = dbConnection();
  $sql = "INSERT INTO voting (fbID, fullname, emailid, quarter, year, choiceone, choicetwo, choicethree, choicefour )
  VALUES ('$fbid','$fbfullname','$femail','$quarter', '$year', '$choiceone' , '$choicetwo', '$choicethree' , '$choicefour')";

  if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    //session_impl($email,$password);
  } else {
    //  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}


function checkuser($fuid){
  $conn = dbConnection();
  $sql = "select * from voting where fbID='$fuid'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    session_start();
    session_unset();
    return true;
  }
  return false;
}
?>
