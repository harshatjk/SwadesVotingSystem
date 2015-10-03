function validate(){
  var year = document.getElementById("yearSelect").value;
  var quarter = document.getElementById("quarterSelect").value;
  var email = document.getElementById("vemail").value;
  //alert(email);
  //alert(quarter);

if(confirmAlert()){
  if(validateQuarter(quarter)){
    if(validateYear(year)){
      if(validateEmail(email)){
        return true;
      }
    }
  }
}
  return false;
}


function confirmAlert() {
    var txt;
    var r = confirm("You won't be able to revert your selection's. Are you sure you want to go ahead ?");
    if (r == true) {
        return true;
    } else {
        return false;
    }

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
