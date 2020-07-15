<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Revista Digital Educativa</title>
		<LINK REL=StyleSheet HREF="estilologin.css" TYPE="text/css">
        <link rel="shortcut icon" href="C:\xampp\htdocs\PaginaWeb\RevistaDigital\favicon.ico">
	 


	</head>

<body>
<?php
session_start();

?>

<Form action="validar.php" method="post">

<h2>Formulario de Login</h2>
<input type="text" placeholder="&#128272; Usuario" name="usuario" id="usuario">
<input type="password" placeholder="&#128272; Contraseña" name="clave" id="clave" >
<input type="submit" value="ENVIAR" name="Enviar">
</Form>


</body>