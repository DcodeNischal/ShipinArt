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
// Form validation starts here.
document.getElementById("full-name").onblur=validate_name;
document.getElementById("artist-email").onblur=validate_email;
document.getElementById("artist-phone").onblur=validate_phone;
document.getElementById("artist-pass").onblur=validate_password;
document.getElementById("confirm-artist-pass").onblur=validate_re_password;


function validate_name()
{
    var name = document.getElementById("full-name").value;

    if(name!="")
    {
        if(name.length>2 && name.length<25){
            let name_pattern = name.search(/^[A-Za-z]{2,}(\s[A-Za-z]{2,})?\s[A-Za-z]{2,}$/);
            if(name_pattern==0){
                console.log("Valid name");
                document.getElementById("name-error-area").innerHTML="";
            }
            else
                document.getElementById("name-error-area").innerHTML="*Name doesn't seem correct."
        }
        else{
            document.getElementById("name-error-area").innerHTML="*Name must be within 2 - 25 characters.";
        }
    }
    else
    {
        document.getElementById("name-error-area").innerHTML="*Field cannot be left empty";
    }
}

function validate_email()
{
    var email = document.getElementById("artist-email").value;

    if(email!="")
    {
            let email_pattern = email.search(/^\w([\.-]?\w+)*@\w([\.-]?\w+)*(\.\w{2,3})+$/);
            if(email_pattern==0){
                console.log("Valid email");
                document.getElementById("email-error-area").innerHTML="";
            }
            else
                document.getElementById("email-error-area").innerHTML="*Email doesn't seem correct.";
        
    }
    else
    {
        document.getElementById("email-error-area").innerHTML="*Field cannot be left empty";
    }
}

function validate_phone()
{
    var phone = document.getElementById("artist-phone").value;

    if(phone!="")
    {
        if(phone.length==10)
        {
            let phone_pattern = phone.search(/^(98\d{8})/);
            if(phone_pattern==0){
                console.log("Valid phone number");
                document.getElementById("phone-error-area").innerHTML="";
            }
            else
                document.getElementById("phone-error-area").innerHTML="*Phone number doesn't seem correct.";
        }
        else
        {
            document.getElementById("phone-error-area").innerHTML="*Must contain exactly 10 digits.";
        }
    }
    else
    {
        document.getElementById("phone-error-area").innerHTML="*Field cannot be left empty";
    }
}

function validate_password()
{
    var password = document.getElementById("artist-pass").value;

    if(password!="")
    {
            let password_pattern = password.search(/^(\w[!@#\$%\^&\*]*){8,15}/);
            if(password_pattern==0){
                console.log("Valid password");
                document.getElementById("password-error-area").innerHTML="";
            }
            else
                document.getElementById("password-error-area").innerHTML="*password must contain 8-15 characters(incl. one digit, one special character.";
        }
    
   
    else
    {
        document.getElementById("password-error-area").innerHTML="*Field cannot be left empty";
    }
}

function validate_re_password()
{
    var re_password = document.getElementById("confirm-artist-pass").value;
    var password = document. getElementById("artist-pass").value;

    if(password!="")
    {
        if(re_password.localeCompare(password))
        {
            console.log(password);
            console.log(re_password);
            console.log("Valid password confirmed")
            document.getElementById("confirm_password-error-area").innerHTML="";
        }
        else    
        document.getElementById("confirm_password-error-area").innerHTML="*Password didn't match"; 
        
    }
    
   
    else
    {
        document.getElementById("confirm_password-error-area").innerHTML="*Field cannot be left empty";
    }
}

