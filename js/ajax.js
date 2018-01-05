var fruits = [];

function getFruits() {

  var searchString = getSearchString();

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
         showList(JSON.parse(this.responseText));
      }
  };

  xmlhttp.open("GET", "php/api/getFruits.php?search="+searchString, true);
  xmlhttp.send();
}

function createFruit() {
  var fruit = {"name": getSearchString(), "color": "White"};

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("POST", "/php/api/createFruit.php");
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send(JSON.stringify(fruit))

  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
         addFruits([fruit]);
      }
  };


}

function getSearchString(){
  var input = document.getElementById("fruit")
  return input.value
}
