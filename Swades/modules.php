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

?>
