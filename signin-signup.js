const signupbutton=document.querySelector(".signupbutton");
const loginbutton=document.querySelector(".loginbutton");
const toggleMove=document.querySelector(".toggleMove");
const signupp =document.querySelector(".signupp");
const loginn=document.querySelector(".loginn");



loginbutton.addEventListener("click",()=>{
    toggleMove.classList.add("toggleMoveRight");
    loginn.classList.add("loginform");
    signupp.classList.remove("signupform");
    toggleMove.innerHTML="Login";
})

signupbutton.addEventListener("click",()=>{
    toggleMove.classList.remove("toggleMoveRight");
    loginn.classList.remove("loginform");
    signupp.classList.add("signupform");
    toggleMove.innerHTML="Signup";
})

function chooseportal(event){
    document.getElementById("login-block-wrapper").style.display="flex";
}
function exitlogin(evt) {
document.getElementById("login-block-wrapper").style.display ="none";
}