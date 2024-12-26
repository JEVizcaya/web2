var inputPass=document.getElementById("password")
var inputRePass=document.getElementById("repassword")
var btnCrear=document.getElementById("btnCrear")

inputPass.oninput=validacionInput;
inputRePass.oninput=validacionInput;
   


function validacionInput(){

    var txtPass=inputPass.value;
    var txtRepass=inputRePass.value;
    if(txtPass==txtRepass){
        btnCrear.disabled=false;
    }else{
        btnCrear.disabled=true;
    }
    //console.log(txtPass);
} 