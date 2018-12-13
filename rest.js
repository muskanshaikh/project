var images=["img/grill.jpg","img/citizen2.jpg","img/citizen6.jpeg","img/citizen5.jpg","img/citizen4.jpg","img/rest.jpg","img/image.jpg"];

var i=0;

function slides(){
document.getElementById("slideimage").src= images[i];
if(i<(images.length-1))
i++;
else
i=0;

}
setInterval(slides,3000);

//muskan

