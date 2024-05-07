<?php
session_start();
$_SESSION['Pregunta3']=$_POST['preg3'];
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
<form method="POST" action="pregunta4.php">
<table border="1" width="700" cellspacing="10" cellpadding="0">
<tr>
<th colspan="2"> ¿Que aspectos cree usted que se deberian mejorar en los centros ecoturisticos
    de Iliatenco? </th>
</tr>
<tr>
<td></td>
<td>
<input type="radio" name="preg4"
value="Mayor limpieza en los centros ecoturistico " />
Mayor limpieza en los centros ecoturistico <br/>
<input type="radio" name="preg4"
value="Mayor profesionalismo de los anfitriones" />
Mayor profesionalismo de los anfitriones<br/>
<input type="radio" name="preg4"
value="Aumentar actividades recreativas en cada centro ecoturisticos" />
Aumentar actividades recreativas en cada centro ecoturisticos<br/>
<input type="radio" name="preg4" value="Nada" />Nada
</td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" value="< Anterior"
onclick = "this.form.action = 'pregunta3.php'" />
<input type="submit" value="Siguiente >"
onclick = "this.form.action = 'pregunta5.php'" />
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