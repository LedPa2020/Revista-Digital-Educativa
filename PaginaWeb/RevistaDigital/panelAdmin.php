<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <TITle>PANEL DOCENTE</TITle>
        <LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css">
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

    <body>
        <?php 
        include ("include/menuAdmin.php");
        session_start();
        $varsesion = $_SESSION['usuario'];
        if($varsesion==null || $varsesion = '') {
            echo "Usted no tiene autorizacion";
            die();
        }
        ?>
            <CENTER>
            <h1>PANEL DOCENTE</h1>
            <h2>Bienvenido: <?php echo $_SESSION['usuario'] ?> </h2>
            
            </CENTER>
    </body>
</html>