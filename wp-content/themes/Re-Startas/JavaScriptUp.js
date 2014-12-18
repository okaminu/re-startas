

//--------- KINTAMIEJI -------------

var aktyvus="Pasl1";
var PaslaugaDelay=10000;
var SlinktiPaslauga=true;


//--------JQuery----------------



$(document).ready(function(){

$("#Pasl1Apr").fadeIn(1000);

})

//---------JQuery END-------------------
function PaieskaTuscia(){
$laukelis=document.getElementById("s");
$laukelis.value="";
}

function NaujienTuscia()
{
$laukelis=document.getElementById("s2");
$laukelis.value="";
}
function bodyInit(){
//------Auto-Clock Paslauga---------------
//setTimeout("KeistiPaslauga(2)", PaslaugaDelay);
//Jei reikia kad paslaugos ratas toliau suktusi, reikia atkomentuoti
//33 eilute kuri prasideda -setTimeout-

$laukelis=document.getElementById("s");
$laukelis.value="Ieškoti...";

$laukelis=document.getElementById("s2");
$laukelis.value="El, pašto adresas";

}

function KeistiPaslauga(kelintas)
{
if(!SlinktiPaslauga)
{
return 0;


}
Spausti="Pasl"+kelintas;
AktyvuotiPaslauga(Spausti, true);
kelintas++;
if(kelintas==6)
{
kelintas=1;

}
setTimeout("KeistiPaslauga('"+kelintas+"')", PaslaugaDelay);




}


function AktyvuotiPaslauga(id, Slinkt){
if(!Slinkt)
{
SlinktiPaslauga=false;

}

//-------Aprasymas-------------
SenasApr="#"+aktyvus+"Apr";
NaujasAprasymas="#"+id+"Apr";


$(SenasApr).fadeOut(200, function(){
$(NaujasAprasymas).fadeIn(600);
});


//------Antraste-----------
SenasAnt=aktyvus+"Ant";
NaujasAnt=id+"Ant";

objektas1=document.getElementById(SenasAnt);
objektas1.setAttribute("class", "PaslNeAktyvus");
objektas2=document.getElementById(NaujasAnt);
objektas2.setAttribute("class", "PaslAktyvus");

aktyvus=id;
}
