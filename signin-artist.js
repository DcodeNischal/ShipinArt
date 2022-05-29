const signup=document.querySelector(".signup");
const login=document.querySelector(".login");
const toggleMove=document.querySelector(".toggleMove");
const signupp =document.querySelector(".signupp");
const loginn=document.querySelector(".loginn");



login.addEventListener("click",()=>{
    toggleMove.classList.add("toggleMoveRight");
    loginn.classList.add("loginform");
    signupp.classList.remove("signupform");
    toggleMove.innerHTML="Login";
})

signup.addEventListener("click",()=>{
    toggleMove.classList.remove("toggleMoveRight");
    loginn.classList.remove("loginform");
    signupp.classList.add("signupform");
    toggleMove.innerHTML="Signup";
})