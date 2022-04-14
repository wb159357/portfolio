window.onload = function(){

//var luck =[];
var colors = [];

var btn = document.getElementById("btn");
var output = document.getElementById("output");

var message, random_luck, random_color;

btn.onclick = function(){
    random_luck = luck[Math.floor(Math.random() * luck.length)];
    random_color = colors[Math.floor(Math.random() * colors.length)];

    message = "<h2>" + random_luck + "</h2>";
    message += "<p>は　" + random_color + "色</p>";
}

}