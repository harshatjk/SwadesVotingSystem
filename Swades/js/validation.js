function validate(){
  var fname = document.getElementById("firstName").value;
  var lname = document.getElementById("lastName").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  alert(fname);
  if(validatefName(fname)){
    if(validatelName(lname)){
      if(validateEmail(email)){
      return true;
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
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,7})+$/;
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
  var filter =  /^([\w-\.]+@(?scu.edu)([\w-]+\.)+[\w-]{2,4})?$/;
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
