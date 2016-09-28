function validate(){
  var pass1 = document.getElementById("p1").value;
  var pass2 = document.getElementById("p2").value;

  if(pass1 != pass2)
    alert("The passwords entered do not match.")
  else if(pass1.length < 8)
      alert("Your password must be at least 8 characters long.")
  else
    alert("Password validated.");
  //console.log(pass1 + ", " + pass2)
}
