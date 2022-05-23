var btnSignin = document.querySelector("#signin");
var btnSignup = document.querySelector("#signup");

let nome = document.querySelector('#name')

var body = document.querySelector("body");


btnSignin.addEventListener("click", function() {
    body.className = "sign-in-js";

});

btnSignup.addEventListener("click", function() {
    body.className = "sign-up-js";
    alert('Iniciando Cadastro')



})