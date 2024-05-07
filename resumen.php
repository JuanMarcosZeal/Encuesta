<?php
session_start();
$_SESSION['Pregunta5']=$_POST['preg5'];
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

<h3>INFORME DE ENCUESTA</h3>

<?php
$nombres = $_SESSION ['nombres'];
$dni = $_SESSION['dni'];
$pregunta1 = $_SESSION['Pregunta1'];
$pregunta2= $_SESSION['Pregunta2'];
$pregunta3 = $_SESSION['Pregunta3'];
$pregunta4 = $_SESSION['Pregunta4'];
$pregunta5 = $_SESSION['Pregunta5'];
?>
<section>
<form method="POST" action="resumen.php">
<table border="1" width="700" cellspacing="10" cellpadding="0">
<tr>
<td> Nombre del ciudadano </td>
<td> <?php echo $nombres; ?> </td>
</tr>
<tr>
<td> Lugar de Origen</td>
<td><?php echo $dni; ?></td>
</tr>
<tr>
<td> ¿Que sitios ecoturisticos le gustaria o ha visitado en Iliatenco?
</td>
<td><?php echo $pregunta1; ?></td>
</tr>
<tr>
<td> ¿Qué tipo de actividad recreativa le gustaria hacer en Iliatenco?
</td>
<td><?php echo $pregunta2; ?></td>
</tr>
<tr>
<td> ¿Generalmente que día usted suele vacacionar?
</td>
<td><?php echo $pregunta3; ?></td>
</tr>
<tr>
<td> ¿Que aspectos cree usted que se deberian mejorar en los centros ecoturisticos
    de Iliatenco?
</td>
<td><?php echo $pregunta4; ?></td>
</tr>
<tr>
<td>¿Recomendaria usted visitar los centros ecoturisticos de Iliatenco?
</td>
<td><?php echo $pregunta5; ?></td>
</tr>
<tr>
<td>
<input type="submit" value="< Anterior"
onclick = "this.form.action = 'pregunta5.php'" />
<input type="submit" value="Volver a encuestar"
onclick = "this.form.action = 'index.php'" />
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