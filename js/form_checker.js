function check(){

  //username email check
  var username = document.getElementById("user").value;
  if(username == ""){
    alert("Please enter a username.");
    return false;
  }
  var split1 = username.split('@');
  if(split1.length == 2 && split1[0].length > 0 && split1[1].length > 0){
    var split2 = split1[1].split('.');
    if(split2.length != 2 || split2[0].length == 0 || split2[1].length == 0){
      alert("Invalid username, must be in the form of an email address.");
      return false;
    }
  }
  else{
    alert("Invalid username, must be in the form of an email address.");
    return false;
  }

  //password check
  if(document.getElementById("pass").value == ""){
    alert("Please enter a password.");
    return false;
  }

  //item quantity check
  var quantity1 = document.getElementById("quantity1").value;
  var quantity2 = document.getElementById("quantity2").value;
  var quantity3 = document.getElementById("quantity3").value;
  if(quantity1 == "" || quantity2 == "" || quantity3 == ""){
    alert("Please specify a quantity for each item.");
    return false;
  }
  if(quantity1 < 0 || quantity2 < 0 || quantity3 < 0){
    alert("Please specify a non-negative quantity for each item.");
    return false;
  }

  //shipping check
  var shippingSelected = false;
  var shipping = document.getElementsByName("shipping");
  for (var i = 0; i < shipping.length; i++)
    if(shipping[i].checked)
      shippingSelected = true;
  if(!shippingSelected){
    alert("Please select a shipping method.");
    return false;
  }

  return true;
}
