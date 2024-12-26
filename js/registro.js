var inputPass=document.getElementById("password")
var inputRePass=document.getElementById("repassword")
var btnCrear=document.getElementById("btnCrear")
var msg=document.getElementById("msg")

inputPass.oninput=validacionInput;
inputRePass.oninput=validacionInput;
   


function validacionInput(){

    var txtPass=inputPass.value;
    var txtRepass=inputRePass.value;
    if(txtPass==txtRepass){
        btnCrear.disabled=false;
        msg.style.display="none";
    }else{
        btnCrear.disabled=true;
        msg.style.display="block";
    }
    //console.log(txtPass);
} 