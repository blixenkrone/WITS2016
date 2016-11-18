var navn        = "Simon Blixenkrone"; 
var kursus      = "WITS2016";
var projekt     = "MiniProjekt";
var igen        = "Klik på knappen igen, for at vise flere info"

var mail        = "Mail: sikobl@ruc.dk"; 
var studienr    = "Studienr.: 55106";
var afslutning  = "Tak for tiden.";
var aktiv = 1;



function aktivFunction(){

    document.getElementById("but4").innerHTML= igen;
    
    if(aktiv==1){
        document.getElementById("but1").innerHTML= navn;
        document.getElementById("but2").innerHTML= kursus;      
        document.getElementById("but3").innerHTML= projekt;
        aktiv = 2
        return this;
    }else{
        document.getElementById("but1").innerHTML= mail;
        document.getElementById("but2").innerHTML= studienr;
        document.getElementById("but3").innerHTML= afslutning;
        aktiv = 1;
        return this;
    }
}