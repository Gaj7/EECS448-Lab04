var imgList = ["one.png", "two.jpg", "three.png", "four.jpg", "five.jpg"]
var idx = 0;

function previous(){
  idx = (imgList.length+(idx-1))%imgList.length;
  document.getElementById("slideShowImage").src = "img/" + imgList[idx];
}

function next(){
  idx = (idx+1)%imgList.length
  document.getElementById("slideShowImage").src = "img/" + imgList[idx];
}
