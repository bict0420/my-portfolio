
var i = 0;
var images = [];
var time = 300;

images[0] = 'hc.jpg';
images[1] = 'hn.jpg';
images[2] = 'mc.jpg';
images[3] = 'me.jpg';
images[4] = 'mk.jpg';
images[5] = 'mn.jpg';
images[6] = 'sa.jpg';

function changeImg(){
    document.slide.scr = images[i];
    if(i<images.length -1){
        i++;
    }
    else{
        i = 0;
    }
    setTimeout("changeImg()", time);
}


