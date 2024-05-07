<?php
session_start();
$_SESSION['Pregunta4']=$_POST['preg4'];
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
<form method="POST" action="pregunta5.php">
<table border="1" width="700" cellspacing="10" cellpadding="0">
<tr>
<th colspan="2"> ¿Recomendaria usted visitar los centros ecoturisticos de Iliatenco?
</th>
</tr>
<tr>
<td></td>
<td>
<input type="radio" name="preg5" value="Si" />Si<br/>
<input type="radio" name="preg5" value="No" />No<br/>
</td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" value="< Anterior"
onclick = "this.form.action = 'pregunta4.php'" />
<input type="submit" value="Siguiente >"
onclick = "this.form.action = 'resumen.php'" />
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