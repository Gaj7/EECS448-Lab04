function check(){
  var username = document.getElementById("user").value;
  var password = document.getElementById("pass").value;

  var u1 = username.split('@');
  var u2 = u1.split('.')
  if(!(u1[0].length > 0 && u2[0].length > 0 && u2[1].length > 0)){
    alert("Invalid username, must be in the form of an email address.");
    return false;
  }

  return true;
}
