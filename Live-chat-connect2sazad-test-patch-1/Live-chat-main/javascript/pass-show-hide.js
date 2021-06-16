const pswrdField = document.querySelector(".form input[type='password']"),
toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = ()=>{
    if(pswrdField.type == "password"){
        pswrdField.type = "text";
        toggleBtn.classList.add("active");
    }else{
        pswrdField.type = "password";
        toggleBtn.classList.remove("active");
    }
}

var step1 = document.getElementById("step1");
var step2 = document.getElementById("step2");
var step3 = document.getElementById("step3");

var btn1 = document.getElementById("Btn1");
var btn2= document.getElementById("Btn2");

btn1.onclick = ()=>{
    step1.style.display = "none";
    step2.style.display = "block";
}
btn2.onclick = ()=>{
    step2.style.display = "none";
    step3.style.display = "block";
}
