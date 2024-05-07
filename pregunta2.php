<?php
session_start();
$_SESSION['Pregunta1']=$_POST['preg1'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<link href="estilo.css" rel="stylesheet">
<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #3db9f3; /* Fondo azul */
    }
    section {
        width: 100%;
        max-width: 700px;
    }
</style>
</head>
<body>
<header>
<?php include 'encabezado.php'; ?>
</header>
<br>
<section>
<form method="POST" action="pregunta2.php">
<table border="1" width="700"
cellspacing="10" cellpadding="0">
<tr>
<th colspan="2"> ¿Qué tipo de actividad recreativa le gustaria hacer en Iliatenco? </th>
</tr>
<tr>
<td></td>
<td>
<input type="radio" name="preg2"
value="Senderismo" /> Senderismo <br/>
<input type="radio" name="preg2"
value="Dia de campo" />
Dia de campo<br/>
<input type="radio" name="preg2"
value="Picnic" />
Picnic<br/>
<input type="radio" name="preg2"
value="Pezca" />
Pezca<br/>
<input type="radio" name="preg2"
value="Camping" />Camping<br/>
<input type="radio" name="preg2"
value="Fotografia" />Fotografia

</td>
</tr>
<tr>
<td></td>
<td>
<input type="submit"
value="< Anterior"
onclick="this.form.action='pregunta1.php'"/>
<input type="submit" value="Siguiente >"
onclick="this.form.action='pregunta3.php'"/>
</td>
</tr>
</table>
</form>
</section>
<footer>
<?php include 'pie.php';?>
</footer>
</body>
</html>