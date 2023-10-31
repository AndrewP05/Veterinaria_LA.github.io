
document.getElementById("boton_registrarse").addEventListener("click", register);
document.getElementById("boton_iniciarS").addEventListener("click", logIn);
window.addEventListener("resize", anchoP);

var contenedor_logIn_register = document.querySelector(".Contenedor_logIn-Register");
var formulario_logIn = document.querySelector(".formulario_logIn");
var formulario_register = document.querySelector(".formulario_register");
var Recuadro_logIn = document.querySelector(".Recuadro_logIn");
var Recuadro_register = document.querySelector(".Recuadro_register");


function anchoP(){
    if(window.innerWidth >850){
        Recuadro_logIn.style.display = "block";
        Recuadro_register.style.display = "block";
    }else{
        Recuadro_register.style.display = "block";
        Recuadro_register.style.opacity = "1";
        Recuadro_logIn.style.display = "none";
        formulario_logIn.style.display = "block";
        formulario_register.style.display = "none";
        contenedor_logIn_register.style.left = "0px";
        
    }
}

anchoP();

function register(){
    if(window.innerWidth >850){
        formulario_register.style.display = "block";
        contenedor_logIn_register.style.left = "410px";
        formulario_logIn.style.display = "none";
        Recuadro_register.style.opacity = "0";
        Recuadro_logIn.style.opacity = "1";
    }else{
        formulario_register.style.display = "block";
        contenedor_logIn_register.style.left = "0px";
        formulario_logIn.style.display = "none";
        Recuadro_register.style.display = "none";
        Recuadro_logIn.style.opacity = "1";
    }
}

function logIn(){
    if(window.innerWidth > 850){
        formulario_register.style.display = "none";
        contenedor_logIn_register.style.left = "10px";
        formulario_logIn.style.display = "block";
        Recuadro_register.style.opacity = "1";
        Recuadro_logIn.style.opacity = "0";
    }else{
        formulario_register.style.display = "none";
        contenedor_logIn_register.style.left = "0px";
        formulario_logIn.style.display = "block";
        Recuadro_register.style.display = "block";
        Recuadro_logIn.style.display = "none";
    }
}
