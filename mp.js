console.log("Start på program");

var velkomst = "Hej!";
var navn = true;
var svar;
var tabelDesign;
getSvar();

function getSvar(){
alert(velkomst);
svar = prompt("Indstast dit navn, for at komme ind på siden");
    if(svar == ""){
        navn = false;
        if(navn == false){
            alert("Indtast et navn!");
            }
            getSvar();   

        }
    alert("Velkommen" + " " + svar + "!");
    exit();
}

console.log("Slut på program");