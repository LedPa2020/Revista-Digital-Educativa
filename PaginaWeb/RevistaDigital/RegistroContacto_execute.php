<?php
	include ("include/conexion.php");
	
	$nombre = $_REQUEST["nombre"];
	$apellido = $_REQUEST["apellido"];
	$correo = $_REQUEST["correo"];
	$telefono = $_REQUEST["telefono"];
	$texto = $_REQUEST["texto"];
	
	
	$Form= $_REQUEST["Form"];
	$FormRedirect="";
	$message="";
	
	switch($Form)
	{
		case "agregarDocente":
			$FormRedirect = "RegistroDocente.php?nombre=$nombre&apellido=$apellido&dni=$dni&correo=$correo&usuario=$usuario&contraseña=$contraseña&sexo=$sexo&fechaNacimiento=$fechaNacimiento";
			break;
		case "agregarAlumno":
			$FormRedirect = "RegistroAlumno.php?nombre_apellido=$nombre_apellido&dni=$dni&correo=$correo&nombre_usuario=$nombre_usuario&contraseña=$contraseña&sexo=$sexo&curso=$curso&division=$division&orientacion=$orientacion";
			break;
			case "agregarContacto":
			$FormRedirect = "RegistroContacto.php?nombre=$nombre&apellido=$apellido&correo=$correo&telefono=$telefono&texto=$texto";
			break;
		
	}
	
	if ($telefono != "" && $texto != "")
	{
		$contactos = $cn->query("SELECT * FROM contacto WHERE contacto.texto = '".$texto."'");
		if ($dato=$contactos->fetch_assoc())
		{
			$message="Ya ha realizado esta consulta";
			$FormRedirect = "RegistroContacto.php";
		}else{
		$sql = "INSERT INTO contacto VALUES('','$nombre','$apellido','$correo','$telefono','$texto')";
		$cn->query($sql);
		$message="Se ha guardado correctamente.";
		if ($Form=="agregarContacto")
			{
			$FormRedirect = "RegistroContacto.php";
			}
	}
	}	
	
?>

<script type="text/javascript">
	alert("<?=$message?>");
	window.location="<?=$FormRedirect?>";
</script>