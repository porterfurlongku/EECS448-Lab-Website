var photos = ["images/image1.jpeg", "images/image2.jpeg", "images/image3.jpeg", "images/image4.jpeg", "images/image5.jpeg"]

var imgTag = document.querySelector("img");
var count = 0;

function next(){
    count++;
    if(count >= photos.length){
        count = 0;
        imgTag.src = photos[count];
    }else{
        imgTag.src = photos[count];
    }
}

function prev(){
    count--;
    if(count < 0){
        count = photos.length -1;
        imgTag.src = photos[count];
    }else{
        imgTag.src = photos[count];
    }
}