<?php
	include ("include/conexion.php");
	
	$nombre_apellido = $_REQUEST["nombre_apellido"];
	$dni = $_REQUEST["dni"];
	$correo = $_REQUEST["correo"];
	$nombre_usuario = $_REQUEST["nombre_usuario"];
	$contra = $_REQUEST["contra"];
	$sexo = $_REQUEST["sexo"];
	$curso = $_REQUEST["curso"];
	$division = $_REQUEST["division"];
	$orientacion = $_REQUEST["orientacion"];
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
		$alumno = $cn->query("SELECT * FROM alumno WHERE alumno.correo = '".$correo."' OR alumno.dni = '".$dni."'");
		if ($dato=$alumno->fetch_assoc())
		{
			$message="Este cliente con el dni ".$dni." ya existe o el correo " .$correo. " se encuentra en uso." ;
			$FormRedirect = "RegistroAlumno.php";
		}else{
			$sql = "INSERT INTO alumno VALUES('','$nombre_apellido','$dni','$correo','$nombre_usuario','$contra_cifrada','$sexo','$curso','$division','$orientacion','$fechaNacimiento','2')";
			$cn->query($sql);
			$message="Se ha guardado correctamente.";
			if ($Form=="agregarAlumno")
			{
				$FormRedirect = "RegistroAlumno.php";
			}
		}
		
		
	}
?>

<script type="text/javascript">
	alert("<?=$message?>");
	window.location="<?=$FormRedirect?>";
</script>