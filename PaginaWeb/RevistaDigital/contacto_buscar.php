<!DOCTYPE html>
<html>
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
	$action=""; $telefono=""; $filtro="";
	if (!empty($_REQUEST["action"])) {$action = $_REQUEST["action"];}
	if (!empty($_REQUEST["telefono"])) {$telefono = $_REQUEST["telefono"];}
	if (!empty($_REQUEST["filtro"])) {$filtro = $_REQUEST["filtro"];}
		
	switch($action)
	{
		case "delete":
			if (!empty($telefono))
			{
				$SQL = "DELETE FROM contacto WHERE contacto.telefono =".$telefono."";
				$cn->query($SQL);
				$message="<b>Se ha eliminado el contacto con el telefono ".$telefono."</b>";
			}
			break;
		case "buscar":
		$SQLfiltro = " WHERE contacto.telefono LIKE '%".$filtro."%' OR contacto.nombre LIKE '%".$filtro."%' OR contacto.apellido LIKE '%".$filtro."%' ";
			break;
		
		default:
			
	}
	
?>
	<div align=center>
	<h1>GESTION CONTACTOS</h1>
    <form name=formBuscar method=post>
	<input class='boton' type=text name=filtro id=filtro size=15 maxlength=50 required onfocus=this.select() value="<?=$filtro?>">
	<input type=submit value=Buscar class='boton' onclick=Buscar();>
	<input type=button value='Ver Todos' class='boton' onclick=VerTodo();>
	</form>
	</div><br>
	
	<div align='center'><?=$message?></div><br>
	
	<?php
	$contactos = $cn->query("SELECT * FROM contacto ".$SQLfiltro." ORDER BY telefono");
	
	if (!$contactos->num_rows==0)
	{
		?>
		<table align=center class='table1'>
		<thead>
		<tr>
			<th></th>
			<th scope="col" abbr="Starter">NOMBRE</th>
			<th scope="col" abbr="Medium">APELLIDO</th>
			<th scope="col" abbr="Deluxe">CORREO</th>
			<th scope="col" abbr="Starter">TELEFONO</th>
			<th scope="col" abbr="Medium">CONSULTA</th>		
		</tr>
		</thead>
		<?php
		while ($fila=$contactos->fetch_assoc())
		{
			echo "<tr>";
			echo "<th></th>";
			echo "<td>".$fila["nombre"]."</td>";
			echo "<td>".$fila["apellido"]."</td>";			
            echo "<td>".$fila["correo"]."</td>";
			echo "<td>".$fila["telefono"]."</td>";
			echo "<td width=750px>".$fila["texto"]."</td>";
			echo "<td><input type=image  src='images/boton_agregar.gif' title='RESPONDER CONTACTO'	onclick=contacto_Agregar(".$fila["telefono"].");></td>";
			echo "<td><input type=image  src='images/boton_editar.gif' title='MODIFICAR CONTACTO' 	onclick=contacto_Editar(".$fila["telefono"].");></td>";
			echo "<td><input type=image  src='images/boton_borrar.gif'  title='ELIMINAR CONTACTO' 	onclick=contacto_Eliminar('".$fila["telefono"]."');></td>";
			echo "</tr>";
		}
		echo "</table>";
	}else{
		
		if (!empty($filtro))
		{
			echo "<div align='center' class='font1_red'>No se encontro ningun contacto con su filtro: <u>$filtro</u></div><br>";
		}else{
			echo "<div align='center' class='font1_red'>Ingrese un telefono/nombre/apellido para buscar en los contactos registrados.</div><br>";
		}
	}
	?>
</body>


<script  type="text/javascript">
	
	function contacto_Agregar(telefono)
	{
		window.location="contacto_agregar.php?nombre="+nombre;
		return true;
	}
	
	function contacto_Editar(telefono)
	{
		document.location.href="contacto_editar.php?action=editar&telefono="+telefono;
		return true;
	}
	
	function contacto_Eliminar(telefono)
	{
		if(confirm("¿Esta seguro que desea eliminar a "+telefono+"?"))
		{
			document.location.href="contacto_buscar.php?action=delete&telefono="+telefono;
		}
		return true;
	}
	
	function Buscar()
	{
		if(document.formBuscar.filtro.value.length>0)
		{
			document.formBuscar.submit();
			document.formBuscar.action='contacto_buscar.php?action=buscar';
			return true;
		}
		return false;
	}
	
	function VerTodo()
	{
		document.formBuscar.filtro.value="";
		document.formBuscar.submit();
		document.formBuscar.action='contacto_buscar.php?action=';
		return true;
	}
	
</script>
