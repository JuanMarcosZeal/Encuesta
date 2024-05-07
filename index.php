<?php
session_start();

// Verificar si los índices 'txtNombres' y 'txtDNI' están definidos en el array $_POST
$nombres = isset($_POST['txtNombres']) ? $_POST['txtNombres'] : '';
$dni = isset($_POST['txtDNI']) ? $_POST['txtDNI'] : '';

// Guardar los valores en la sesión
$_SESSION['nombres'] = $nombres;
$_SESSION['dni'] = $dni;
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
<form method="POST" action="pregunta1.php">
    
<table border="1" width="700" cellspacing="10" cellpadding="0">
<tr>
<td> Nombres y apellidos </td>
<td><input type="text" name="txtNombres" size="50" value="<?php echo $nombres; ?>" /></td>
</tr>
<tr>
<td> Lugar de Origen </td>
<td><input type="text" name="txtDNI" size="30" maxlength="25" value="<?php echo $dni; ?>" /></td>
</tr>
<tr>
<td> Empezar con la encuesta >>> </td>
<td><input type="submit" value="Encuesta" /></td>
</tr>
</table>
</form>
</section>
<footer>
<?php include 'pie.php';?>
</footer>
</body>
</html>
 