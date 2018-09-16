<html>

 

<head>

<title> Lady </title>

<script type="text/javascript">

function mostraDiv(valor)

{

if(valor == "fundamental")

{

document.getElementById("fundamental").style.display = "block";

document.getElementById("medio").style.display = "none";

document.getElementById("superior").style.display = "none";

}

 

else if(valor == "medio")

{

document.getElementById("fundamental").style.display = "none";

document.getElementById("medio").style.display = "block";

document.getElementById("superior").style.display = "none";

}

 

else if(valor == "superior")

{

document.getElementById("fundamental").style.display = "none";

document.getElementById("medio").style.display = "none";

document.getElementById("superior").style.display = "block";

}

}

</script>

 

<style type="text/css">

#fundamental, #medio, #superior

{

display:none;

}

</style>

</head>

 

<body>

<p>

<select name="escolaridade" onchange="mostraDiv(this.value)">

<option value="fundamental"> Fundamental </option>

<option value="medio"> Ensino Médio </option>

<option value="superior"> Ensino Superior </option>

</select>

</p>

 

<p>

 

<div id="fundamental">

Nome : <input type="text" name="nome" /> <br />

Série: <input type="text" name="serie" />

</div>

 

<div id="medio">

Nome : <input type="text" name="nome" /> <br />

Série: <input type="text" name="serie" /> <br />

Escola: <input type="text" name="escola" />

</div>

 

<div id="superior">

Nome : <input type="text" name="nome" /> <br />

Série: <input type="text" name="serie" /> <br />

Escola: <input type="text" name="escola" /> <br />

Curso: <input type="text" name="curso" />

</div>

 

</p>

 

</body>

 

</html>