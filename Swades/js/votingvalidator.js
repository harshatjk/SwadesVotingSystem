function validate(){
  var year = document.getElementById("yearSelect").value;
  var quarter = document.getElementById("quarterSelect").value;
  var email = document.getElementById("vemail").value;
  alert(email);
  //alert(quarter);

  if(validateQuarter(quarter)){
    if(validateYear(year)){
      if(validateEmail(email)){
        return true;
      }
    }
  }

  return false;
}


function validateYear(year) {
  if( year == ""){
    document.getElementById("formError").innerHTML=" Please select the year of joining. ";
    return false;
  }
  else{
    return true;
  }
}


function validateQuarter(quarter) {
  if( quarter == ""){
    document.getElementById("formError").innerHTML=" Please select the quarter of joining. ";
    return false;
  }
  else{
    return true;
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
