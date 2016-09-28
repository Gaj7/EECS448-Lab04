function update(){
  var borderR = document.getElementById("borderR").value;
  var borderG = document.getElementById("borderG").value;
  var borderB = document.getElementById("borderB").value;
  var backgroundR = document.getElementById("backgroundR").value;
  var backgroundG = document.getElementById("backgroundG").value;
  var backgroundB = document.getElementById("backgroundB").value;

  var borderColor = "rgb(" + borderR + ", " + borderG + ", " + borderB + ")";
  var backgroundColor = "rgb(" + backgroundR + ", " + backgroundG + ", " + backgroundB + ")";

  console.log(borderColor + "; " + backgroundColor);

  var dummyParagraph = document.getElementById("dummyParagraph");
  dummyParagraph.style.borderColor = borderColor;
  dummyParagraph.style.backgroundColor = backgroundColor;
}
