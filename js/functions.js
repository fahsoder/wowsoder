function mostraDiv(valor)

{

if(valor == "Conjuntos")

{

document.getElementById("Conjuntos").style.display = "block";

document.getElementById("Itens").style.display = "none";

document.getElementById("Armas").style.display = "none";

}

 

else if(valor == "Itens")

{

document.getElementById("Conjuntos").style.display = "none";

document.getElementById("Itens").style.display = "block";

document.getElementById("Armas").style.display = "none";

}

 

else if(valor == "Armas")

{

document.getElementById("Conjuntos").style.display = "none";

document.getElementById("Itens").style.display = "none";

document.getElementById("Armas").style.display = "block";

}

}