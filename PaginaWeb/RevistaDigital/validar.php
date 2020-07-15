<?php
session_start();
$conexion = mysqli_connect("localhost", "root", "", "bdrevistadigital");
if ($conexion == false)
{
	die('No se pudo conectar a la base de datos.');
}
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$usuario = strip_tags(mysqli_real_escape_string($conexion,trim($usuario)));
$clave   = strip_tags(mysqli_real_escape_string($conexion,trim($clave)));
$_SESSION['usuario'] = $usuario;
$clave_cifrada = password_hash($clave,PASSWORD_DEFAULT);
$consulta="SELECT * FROM docente D WHERE D.nombre_usuario='$usuario'";
$consultaA="SELECT * FROM alumno A WHERE A.nombre_usuario='$usuario'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
$resultadoA=mysqli_query($conexion,$consultaA);
$filasA=mysqli_num_rows($resultadoA);

if($filas>0) {
    $row = mysqli_fetch_array($resultado);
    if(password_verify($clave,$row['contra'])) {
        header("Location:panelAdmin.php");
    }else { 
        header("Location:login.php");
        echo "Clave incorrecta,intente otra vez";   
        }  
    
}
else { 
    if($filasA>0) {
    $rowA = mysqli_fetch_array($resultadoA);
     if(password_verify($clave,$rowA['contra'])) {
        header("Location:panel.php");
    }else { 
        header("Location:login.php");
        echo "Clave incorrecta,intente otra vez";   
        }  
    }     
}
if($filas<1 AND $filasA<1) {
    header("Location:login.php");
        echo "Clave incorrecta,intente otra vez"; 
}
mysqli_free_result($resultado);
mysqli_free_result($resultadoA);
mysqli_close($conexion);