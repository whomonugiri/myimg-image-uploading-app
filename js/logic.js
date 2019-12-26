var loginButton = document.getElementById('signin');
var loginForm = document.getElementById('signin-form');
var formCloseBtn = document.getElementById('form-close');
var nolog = document.getElementById('nolog');
function showHide(){
    loginForm.classList.toggle('hide');
    loginForm.classList.add('fadeIn');
}

loginButton.addEventListener("click",showHide);

formCloseBtn.addEventListener("click",showHide);