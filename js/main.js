var user=document.getElementById("imgUser");
user.onclick=function(){
    var menuUser=document.getElementById("menuUser");
    if(menuUser.style.display=="block"){
        menuUser.style.display="none";
    }else{
        menuUser.style.display="block";
    }

}

var menuMovil=document.getElementById("menuMovil");
menuMovil.onclick=function(){
    if(menu.style.display=="block"){
        menu.style.dispaly="none";
    }else{
        menu.style.display="block";
    }
    
}
    
