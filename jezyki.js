function polski()
{
	
	$("#wynik1").fadeIn(400);
	document.getElementById("wynik1").innerHTML="Polski";
}

function angielski()
{
	
	document.getElementById("wynik2").innerHTML="English";
	$("#wynik2").fadeIn(400);
}

function znikaniepl()
{
	$("#wynik1").fadeOut(400); 
}
function znikanieang()
{
	$("#wynik2").fadeOut(400); 
}
window.onload = tekst;

function tekst()
{
	znikaniepl();
	znikanieang();
}

