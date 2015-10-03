function validate(){
  var fname = document.getElementById("firstName").value;
  var lname = document.getElementById("lastName").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var position = document.getElementById("positionSelect").value;
  var scuid = document.getElementById("scuid").value;
  //alert(scuid);
  if(validatefName(fname)){
    if(validatelName(lname)){
      if(validateEmail(email)){
        if(validatePhone(phone)){
          if(validatePosition(position)){
            if(validateScuID(scuid)){
              return true;
            }
          }
        }
      }
    }
  }
  return false;
}

function validatefName(fname) {
  var letters = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
  if( fname == ""){
    document.getElementById("formError").innerHTML=" First Name can't be empty. ";
    return false;
  }
  else if(fname.match(letters)){
    return true;
  }
  else{
    document.getElementById("formError").innerHTML="Only Letter's and Spaces's are allowed for the Name.";
    return false;
  }
}

function validatelName(lname) {
  var letters = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
  if( lname == ""){
    document.getElementById("formError").innerHTML=" Last Name can't be empty. ";
    return false;
  }
  else if(lname.match(letters)){
    return true;
  }
  else{
    document.getElementById("formError").innerHTML="Only Letter's and Spaces's are allowed for the Name.";
    return false;
  }
}

function validateEmail(email){
  var filter = /[a-zA-Z0-9]+@scu\.edu/;
  // var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,7})+$/;
  if( email == ""){
    document.getElementById("formError").innerHTML=" Email field can't be empty. ";
    return false;
  }
  else if(!filter.test(email)){
    document.getElementById("formError").innerHTML=" Please provide a valid Email Address. ";
    return false;
  }
  else{
    return true;
  }
}

function validatescuEmail(email){
  var filter =  /[a-zA-Z0-9]+@scu\.edu/;
  if( email == ""){
    document.getElementById("formError").innerHTML=" Email field can't be empty. ";
    return false;
  }
  else if(!filter.test(email)){
    document.getElementById("formError").innerHTML=" Please provide a valid Email Address. ";
    return false;
  }
  else{
    return true;
  }
}

function validatePosition(position){
  if( position == ""){
    document.getElementById("formError").innerHTML="  Please select a position you are interested in.  ";
    return false;
  }
  else{
    return true;
  }
}

function validateScuID(scuid) {
  var length = scuid.length;
  //alert(length);
  if( scuid == ""){
    document.getElementById("formError").innerHTML=" Please enter 11 digit SCU ID. ";
    return false;
  }
  else if(length < 11){
    document.getElementById("formError").innerHTML=" SCU ID is a 11 digit number including zeros in the front. ";
    return false;
  }
  else{
    return true;
  }
}

function validatePhone(phone) {
  var phoneLength = phone.length;
  //alert(length);
  if( scuid == ""){
    document.getElementById("formError").innerHTML=" Please enter your contact number ";
    return false;
  }
  else if(phoneLength < 10){
    document.getElementById("formError").innerHTML=" Please enter a valid phone number. ";
    return false;
  }
  else{
    return true;
  }
}
