<?php
	include ("include/conexion.php");
	
	$nombre = $_REQUEST["nombre"];
	$apellido = $_REQUEST["apellido"];
	$dni = $_REQUEST["dni"];
	$correo = $_REQUEST["correo"];
	$usuario = $_REQUEST["usuario"];
	$contra = $_REQUEST["contra"];
	$sexo = $_REQUEST["sexo"];
	$fechaNacimiento = $_REQUEST["fechaNacimiento"];
	$contra_cifrada=password_hash($contra,PASSWORD_DEFAULT);

	$Form = $_REQUEST["Form"];
	$FormRedirect="";
	$message="";
	
	switch($Form)
	{
		case "agregarDocente":
			$FormRedirect = "RegistroDocente.php?nombre=$nombre&apellido=$apellido&dni=$dni&correo=$correo&usuario=$usuario&contra=$contra&sexo=$sexo&fechaNacimiento=$fechaNacimiento";
			break;
		case "agregarAlumno":
			$FormRedirect = "RegistroAlumno.php?nombre_apellido=$nombre_apellido&dni=$dni&correo=$correo&nombre_usuario=$nombre_usuario&contra=$contra&sexo=$sexo&curso=$curso&division=$division&orientacion=$orientacion&fechaNacimiento=$fechaNacimiento";
			break;
	}		
			
			
			if ($dni != "" && $correo != "")
	{
		$docente = $cn->query("SELECT * FROM docente WHERE docente.correo = '".$correo."' AND docente.dni = '".$dni."'");
		if ($dato=$docente->fetch_assoc())
		{
			$message="Este docente con el dni ".$dni." ya existe o el correo " .$correo. " se encuentra en uso.";
			$FormRedirect = "RegistroDocente.php";
		}else{
			$sql = "INSERT INTO docente VALUES('','$nombre','$apellido','$dni','$correo','$usuario','$contra_cifrada','$sexo','$fechaNacimiento','1')";
			$cn->query($sql);
			$message="Se ha guardado correctamente.";
			if ($Form=="agregarDocente")
			{
				$FormRedirect = "RegistroDocente.php";
			}
		}
		
		
	}
?>

<script type="text/javascript">
	alert("<?=$message?>");
	window.location="<?=$FormRedirect?>";
</script>