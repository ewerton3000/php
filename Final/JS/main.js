$(document).ready(function(){
  $('.tel').mask('(00) 0000-0000');
  $('.cpf').mask('000.000.000-00');
  $('.cnpj').mask('00.000.000/0000-00');
});


    var Y = window.innerWidth;

    var mv = document.getElementsByClassName('mv');
    var vid = document.getElementById('movie');

    var unset = true;

if(Y>=1140){
  video();
}

window.addEventListener("resize", function(event){
  Y = window.innerWidth;

    if(Y>=1140 && unset){
      video();
    }else if (Y<1140){
      pause();
    }

});

function video(){
    vid.src = "images/Internet.mp4";
    console.log("videor");
    unset = false;
}

function pause(){
  vid.src = "none";
  console.log('unvideo');
  unset = true;
}


//CONTROLE DO MENU:-----------------
var open = false;
function menui(){
  var menu = document.getElementById('menul');

 if (!open) {
    menu.style.top = "0";
    open = true;
 }else if (open) {
      menu.style.top = "-20rem";
      open = false;
 }
}
