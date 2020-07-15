<?php
	include ("include/conexion.php");
	
    $respuesta = $_REQUEST["respuesta"];
    $nombre = $_REQUEST["nombre"];

    
    $Form= $_REQUEST["Form"];
	$FormRedirect="";
    $message="";
    $FormRedirect = "RegistroContacto.php?nombre=$nombre&respuesta=$respuesta
    $SQL = "UPDATE contacto SET 
    respuesta = '$respuesta', 
    atendido = 'SI' WHERE contacto.nombre = ".$nombre.";";
    $cn->query($SQL);
    $message="Se ha guardado correctamente.";
   
	
?>
<script type="text/javascript">
	alert("<?=$message?>");
	window.location="<?=$FormRedirect?>";
</script>