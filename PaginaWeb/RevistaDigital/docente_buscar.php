<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Revista Digital Educativa</title>
        <LINK REL=StyleSheet HREF="estilotabla.css" TYPE="text/css">
        <link rel="shortcut icon" href="C:\xampp\htdocs\PaginaWeb\RevistaDigital\favicon.ico">
		<script type="text/javascript">
	function e(q) {
    document.body.appendChild( document.createTextNode(q) );
    document.body.appendChild( document.createElement("BR") );
}
function inactividad() {
    window.location="cerrar_sesion.php" ;
	alert("Ha sido desconectado por inactividad.");
}
var t=null;
function contadorInactividad() {
    t=setTimeout("inactividad()",10000);
}
window.onblur=window.onmousemove=function() {
    if(t) clearTimeout(t);
    contadorInactividad();
}
</script>
	</head>

<body onload=document.formBuscar.filtro.focus()>

<?php
	include ("include/conexion.php");
	include ("include/menuAdmin.php");
	session_start();
        $varsesion = $_SESSION['usuario'];
        if($varsesion==null || $varsesion = '') {
            echo "Usted no tiene autorizacion";
            die();
        }
	$message=""; $filtro=""; $SQLfiltro="";
	$action=""; $dni=""; $filtro="";
	if (!empty($_REQUEST["action"])) {$action = $_REQUEST["action"];}
	if (!empty($_REQUEST["dni"])) {$dni = $_REQUEST["dni"];}
	if (!empty($_REQUEST["filtro"])) {$filtro = $_REQUEST["filtro"];}
	
		
	switch($action)
	{
		case "delete":
			if (!empty($dni))
			{
				$SQL = "DELETE FROM docente WHERE docente.dni =".$dni."";
				$cn->query($SQL);
				$message="<b>Se ha eliminado el docente con el dni ".$dni."</b>";
			}
			break;
		case "buscar":
		$SQLfiltro = " WHERE docente.dni LIKE '%".$filtro."%' OR docente.nombre LIKE '%".$filtro."%' OR docente.apellido LIKE '%".$filtro."%' ";
			break;
		
		default:
			
	}
	
?>
	<div align=center>
	<h1>GESTION DOCENTES</h1>
    <form name=formBuscar method=post>
	<input class='boton' type=text name=filtro id=filtro size=15 maxlength=50 required onfocus=this.select() value="<?=$filtro?>">
	<input type=submit value=Buscar class='boton' onclick=Buscar();>
	<input type=button value='Ver Todos' class='boton' onclick=VerTodo();>
	</form>
	</div><br>
	
	<div  align='center'><?=$message?></div><br>
	
	<?php
	$docentes = $cn->query("SELECT * FROM docente ".$SQLfiltro." ORDER BY dni");
	
	if (!$docentes->num_rows==0)
	{
		?>
		<table align=center class="table1" >
		<thead>
		<tr>
			<th></th>
			<th scope="col" abbr="Starter">NOMBRE</th>
			<th scope="col" abbr="Medium">APELLIDO</th>
			<th scope="col" abbr="Business">DNI</th>
			<th scope="col" abbr="Deluxe">CORREO</th>
			<th scope="col" abbr="Starter">USUARIO</th>
			<th scope="col" abbr="Medium">CONTRASEÑA</th>
			<th scope="col" abbr="Business">SEXO</th>
			<th scope="col" abbr="Deluxe">FECHA DE NACIMIENTO</th>
			
			
		</tr>
		</thead>
	
		<?php
		while ($fila=$docentes->fetch_assoc())
		{			
			$FechaNacimiento = $fila["fechaNacimiento"];
			$newFechaNacimiento = date("d-m-Y", strtotime($FechaNacimiento));
			
			echo "<tr>";
			echo "<th></th>";
			echo "<td >".$fila["nombre"]."</td>";
			echo "<td >".$fila["apellido"]."</td>";			
			echo "<td >".$fila["dni"]."</td>";
            echo "<td >".$fila["correo"]."</td>";
            echo "<td >".$fila["nombre_usuario"]."</td>";
            echo "<td >".$fila["contra"]."</td>";
			echo "<td>".$fila["sexo"]."</td>";
            echo "<td>".$newFechaNacimiento."</td>";
			echo "<td><input type=image  src='images/boton_agregar.gif' title='Ir al registro docente'	onclick=docente_Agregar(".$fila["dni"].");></td>";
			echo "<td><input type=image  src='images/boton_editar.gif' title='Modificar docente' 	onclick=docente_Editar(".$fila["dni"].");></td>";
			echo "<td><input type=image  src='images/boton_borrar.gif'  title='Eliminar docente' 	onclick=docente_Eliminar('".$fila["dni"]."');></td>";
			echo "</tr>";
			
		}
		
		echo "</table>";
	}else{
		
		if (!empty($filtro))
		{
			echo "<div align='center' class='font1_red'>No se encontro ningun docente con dni: <u>$filtro</u></div><br>";
		}else{
			echo "<div align='center' class='font1_red'>Ingrese un dni para buscar en los docentes registrados.</div><br>";
		}
	}
	?>
	
	
</body>


<script  type="text/javascript">
	
	function docente_Agregar(dni)
	{
		window.location="RegistroDocente.php";
		return true;
	}
	
	function docente_Editar(dni)
	{
		document.location.href="docente_editar.php?action=editar&dni="+dni;
		return true;
	}
	
	function docente_Eliminar(dni)
	{
		if(confirm("¿Esta seguro que desea eliminar a "+dni+"?"))
		{
			document.location.href="docente_buscar.php?action=delete&dni="+dni;
		}
		return true;
	}
	
	function Buscar()
	{
		if(document.formBuscar.filtro.value.length>0)
		{
			document.formBuscar.submit();
			document.formBuscar.action='docente_buscar.php?action=buscar';
			return true;
		}
		return false;
	}
	
	function VerTodo()
	{
		document.formBuscar.filtro.value="";
		document.formBuscar.submit();
		document.formBuscar.action='docente_buscar.php?action=';
		return true;
	}
	
</script>
</html>