function fun(){
    var green = document.getElementById("green")
    var blue = document.getElementById("blue")
    var red = document.getElementById("red")
    var width = document.getElementById("width")
    var green2 = document.getElementById("green2")
    var blue2 = document.getElementById("blue2")
    var red2 = document.getElementById("red2")

    document.body.style.backgroundColor = "rgb(" + red2.value + ", " + blue2.value + ", " + green2.value + " )";
    document.getElementById("myDiv").style.borderColor = "rgb(" + red.value + ", " + blue.value + ", " + green.value + " )";
    document.getElementById("myDiv").style.borderWidth = width.value
}