document.getElementById("btn.register").addEventListener("click",register);
document.getElementById("btn.login").addEventListener("click",login);
//declarar variables
var formulario_log_reg = document.querySelector(".form-log-reg");
var formulario_log = document.querySelector(".form-log");
var formulario_reg = document.querySelector(".form-reg");
var back_log = document.querySelector(".back-log");
var back_reg = document.querySelector(".back-reg");
function register(){
    formulario_reg.style.display ="block";
    formulario_log_reg.style.left ="410px";
    formulario_log.style.display = "none";
    back_reg.style.opacity = "0";
    back_log.style.opacity ="1";
}
function login(){
    formulario_log.style.display ="block";
    formulario_log_reg.style.left ="10px";
    formulario_reg.style.display = "none";
    back_log.style.opacity = "0";
    back_reg.style.opacity ="1";
}
