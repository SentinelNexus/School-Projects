//let guarda variables en un bloque de codigo
let MainLocation = window.pageYOffset;
window.onscroll = function(){
    let CurrentDisplacement = window.pageYOffset;
    
    if(MainLocation >= CurrentDisplacement){
        document.getElementById("nvar").style.top = "0";
    }else{
        document.getElementById("nvar").style.top = "-100px";
    }
    MainLocation = CurrentDisplacement;
}