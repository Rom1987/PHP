var reg = document.getElementById("registr"); 
var login = document.getElementById("login"); 


var reg_w = document.getElementById("reg_window"); 
var shadow = document.getElementById("shadow"); 
var btnclose = document.getElementById("close_img"); 

var form_reg = document.getElementById("form_reg"); 
var form_aut = document.getElementById("form_aut"); 



reg.addEventListener('click',function(){ 

reg_w.style.transform = 'translateX(150%)'; 
reg_w.style.transition = 'transform .5s linear'; 

reg_w.classList.add("registr") ; 
shadow.classList.add("reg") ; 
form_reg.classList.add("reg_form") ; 



}); login.addEventListener('click',function(){ 

reg_w.style.transform = 'translateX(150%)'; 
reg_w.style.transition = 'transform .5s linear'; 
reg_w.classList.add("registr") ; 
shadow.classList.add("reg") ; 
form_aut.classList.add("reg_aut") ; 



}); 


shadow.addEventListener("click",function(event){ 

// console.log(event.target ); 
// console.log(shadow.id ); 


if(event.target.id  == shadow.id ){ 
reg_w.classList.remove("registr") ; 
shadow.classList.remove("reg") ; 
form_reg.classList.remove("reg_form") ; 
form_aut.classList.remove("reg_aut") ; 

} 

}); 

btnclose.addEventListener("click",function(){ 

reg_w.classList.remove("registr") ; 
shadow.classList.remove("reg") ; 
form_reg.classList.remove("reg_form") ; 
form_aut.classList.remove("reg_aut") ; 

});