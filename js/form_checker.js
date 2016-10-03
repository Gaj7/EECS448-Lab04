function check(){
  var username = document.getElementById("user").value;
  var password = document.getElementById("pass").value;

  var u1 = username.split('@');
  if(!(u1[0].length > 0 && u1[1].length > 0)){
    alert("Invalid username, must be in the form of an email address.");
    return false;
  }

  return false;
  return true;
}
