var isColored = false;
var fruits = [];

function colorize() {
  this.isColored = !this.isColored;
  clearList();
  showList(this.fruits)
}

function addFruits(fruits) {
  var list = document.getElementById("fruits-content")
  for (var i = 0; i < fruits.length; i++) {

    var element;
    if (this.isColored) element = "<li class='list-group-item'><font color='"+fruits[i].color+"'>"+fruits[i].name+"</font></li>"

    else           element = "<li class='list-group-item'>"+fruits[i].name+"</li>"

    list.innerHTML += element
  }
}

function showList(fruits) {
  clearList();
  addFruits(fruits);
}

function clearList() {
  document.getElementById("fruits-content").innerHTML = "";
}
