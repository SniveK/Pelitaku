let password = document.getElementById("password");
let passwordError = document.getElementById("passwordErrorLabel");
let passwordBool = false;
passwordError.style.display = "none";
password.addEventListener('input', event => {
    let text = password.value;
    if(text===''){
      passwordError.style.display='block'
      passwordError.innerText="Password cannot be empty!"
      passwordBool=false;  
    }
    else{
      passwordBool=true;
      passwordError.style.display='none';
    }
    isReg()
})

let confirm = document.getElementById("confirm");
let confirmError = document.getElementById("confirmErrorLabel");
let confirmBool = false;
confirmError.style.display = "none";
confirm.addEventListener('input', event => {
    let text = confirm.value;
    if(text!==password.value){
      confirmError.style.display='block'
      confirmError.innerText="Passwords are not the same"
      confirmBool=false
    }
    else{
      confirmError.style.display='none';
      confirmBool=true
    }
    isReg()
})

let register = document.getElementById("next")
register.disabled=true
function isReg(){
  if(passwordBool && confirmBool){
    register.disabled=false
  }
  else{
    register.disabled=true
  }
}