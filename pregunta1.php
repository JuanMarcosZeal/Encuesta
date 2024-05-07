<?php
session_start();
$_SESSION['nombres']=$_POST['txtNombres'];
$_SESSION['dni']=$_POST['txtDNI'];
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
<p>
<header>
<?php include 'encabezado.php'; ?>
</header>
<br>
<section>
<form method="POST" action="pregunta1.php">
<table border="1" width="700"
cellspacing="10" cellpadding="0">
<tr>
<th colspan="2"> ¿Que sitios ecoturisticos le gustaria o ha visitado en Iliatenco?

</th>
</tr>
<tr>
<td></td>
<td>
<input type="radio" name="preg1"
value=" Cascada YaaPachilli " /> Cascada YaaPachilli <br/>
<input type="radio" name="preg1"
value=" Cerro la Campana " /> Cerro la Campana <br/>
<input type="radio" name="preg1"
value=" mirador cerro ardilla" /> Mirador cerro ardilla <br/>
<input type="radio" name="preg1"
value=" Rio Bandera " /> Rio Bandera

</td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" value="< Anterior"
onclick="this.form.action='index.php'" />
<input type="submit" value="Siguiente >"
onclick="this.form.action='pregunta2.php'"/>
</td>
</tr>
</table>
</form>
</section>
<footer>
<?php include 'pie.php';?>
</footer>
</p>
</body>
</html>