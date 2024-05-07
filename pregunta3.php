<?php
session_start();
$_SESSION['Pregunta2']=$_POST['preg2'];
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
<form method="POST" action="pregunta3.php">
<table border="1" width="700" cellspacing="10" cellpadding="0">
<tr>
<th colspan="2"> ¿Generalmente que día usted suele vacacionar? </th>
</tr>
<tr>
<td></td>
<td>
<input type="radio" name="preg3"
value="Cualquier día feriado" /> Cualquier día feriado <br/>
<input type="radio" name="preg3"
value="Fin de semana" />Fin de semana<br/>
<input type="radio" name="preg3"
value="Fin de mes" />Fin de mes<br/>
<input type="radio" name="preg3"
value="Vacaciones de verano" />Vacaciones de verano
</td>
</tr>
<tr>
<td></td>
<td>
<input type="submit"
value="< Anterior"
onclick = "this.form.action = 'pregunta2.php'" />
<input type="submit"
value="Siguiente >"
onclick = "this.form.action = 'pregunta4.php'" />
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