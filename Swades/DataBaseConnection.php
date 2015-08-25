<?php
include 'config.php';
//echo "1";
function dbConnection(){
  $con = new mysqli(SERVER,USERNAME,PASSWORD,DBNAME);
  //echo "Sucessful";
  if($con->connect_error){
    //echo "failed";
    die("Connection failed:".$con->connect_error );
  }

  return $con;
}

?>
