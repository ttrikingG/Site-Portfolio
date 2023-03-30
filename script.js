function toggle1(el) {
    var display = document.querySelector(".Aboutxt").style.display;
    if(display == 'block'){
        document.querySelector(".Aboutxt").style.display = 'none';
    }
    else{
        document.querySelector(".Aboutxt").style.display = 'block';
    }
};

function closesb(el) {
    document.querySelector(".Aboutxt").style.display = 'none';
}


function toggle2(el) {
    var display = document.querySelector(".glport").style.display;
    if(display == 'block'){
        document.querySelector(".glport").style.display = 'none';
    }
    else{
        document.querySelector(".glport").style.display = 'block';
    }
};

function closeglr(el) {
    document.querySelector(".glport").style.display = 'none';
}

function toggle4(el) {
    var display = document.querySelector(".ctf").style.display;
    if(display == 'block'){
        document.querySelector(".ctf").style.display = 'none';
    }
    else{
        document.querySelector(".ctf").style.display = 'block';
    }
};

function closectf(el) {
    document.querySelector(".ctf").style.display = 'none';
}


//==========on click avatar do profile
/*'use strict'

let photo = document.querySelector(".avatar");
let file = document.querySelector(".input-avatar");

photo.addEventlistener('click', () => {
    file.click();
});

file.addEventlistener('change', (event) => {
    let reader = new FileReader();

    reader.onload = () => {
        photo.src = reader.result;
    }
    reader.readAsDataURL(file.files[0]);
});

function previewimagem(){
    var imagem = document.queryselector('input[name=avatar]').files[0];
    var preview = document.queryselector('img')

    var reader = new FileReader();

    reader.onloadend = function(){
        preview.src = reader.result;
    }

    if(imagem){
        reader.readAsDataURL(imagem);
    }else{
        preview.src = "";
    }
}*/

