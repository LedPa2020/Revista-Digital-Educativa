<html>
    <head>
        <meta charset="UTF-8">
        <title>RDE Manager - Editar Contacto</title>
        <LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css">
        <script type="text/javascript">
	    window.location="<?=$FormRedirect?>";
        </script>
        
    </head>
    
    <body onLoad="document.formCon.correo.focus();">
        <?php
            include ("include/conexion.php");
            include ("include/menuAdmin.php");
            $nombre=""; $apellido=""; $correo=""; $telefono="";$texto="";$action="";$FormRedirect="";
            if (!empty($_REQUEST["action"])) {$action = $_REQUEST["action"];}
            if (!empty($_REQUEST["nombre"])) {$nombre = $_REQUEST["nombre"];}
            if (!empty($_REQUEST["apellido"])) {$apellido = $_REQUEST["apellido"];}
            if (!empty($_REQUEST["correo"])) {$correo = $_REQUEST["correo"];}
            if (!empty($_REQUEST["telefono"])) {$telefono = $_REQUEST["telefono"];}
            if (!empty($_REQUEST["texto"])) {$texto = $_REQUEST["texto"];}
       
            
            if ($action == "update")
            {
                $SQL = "UPDATE contacto SET 
                nombre = '$nombre', 
                apellido = '$apellido', 
                correo = '$correo',
                texto = '$texto'
                WHERE contacto.telefono = ".$telefono.";";
                $cn->query($SQL);
                $FormRedirect = "contacto_buscar.php";
                header ("Location:contacto_buscar.php");
                

                
               
            }
            
            if (!empty($telefono))
            {
                $contactos = $cn->query("SELECT * FROM contacto WHERE contacto.telefono =".$telefono."");
                if ($fila=$contactos->fetch_assoc())
                {
                    $nombre = $fila["nombre"];
                    $apellido = $fila["apellido"];
                    $correo = $fila["correo"];
                    $telefono = $fila["telefono"];
                    $texto = $fila["texto"];                 
                }
            }
        ?> 
        
        <div id="registro contacto" class="Registro"><br>
    
      <center><h1> <B>CONTACTA CON EL EQUIPO DE DOCENTES:</B> </h1> <i>*Campos obligatorios</i><br><br></center>
      <center>
      <FORM name="FormCon" ACTION="contacto_editar.php?action=update&telefono=<?=$telefono?>&texto=<?=$texto?>" METHOD= "POST">
        <INPUT class="caja"  onfocus="this.placeholder=''" onBlur="this.placeholder='NOMBRE*'" TYPE = "TEXT" value="<?=$nombre?>" NAME = "nombre" id = "nombre" placeholder="NOMBRE*" required> <P></P>
        <INPUT class="caja"  onfocus="this.placeholder=''" onBlur="this.placeholder='APELLIDO*'" TYPE = "TEXT" value="<?=$apellido?>" NAME = "apellido" id = "apellido" placeholder="APELLIDO*" required> <P></P>
        <INPUT class="caja"  onfocus="this.placeholder=''" onBlur="this.placeholder='CORREO*'" TYPE = "TEXT" value="<?=$correo?>" NAME = "correo" id = "correo" placeholder="CORREO*" required> <P></P>
        <b>COMENTANOS LA SITUACION*:</b><BR><textarea value="<?=$texto?>" name="texto" id = "texto" cols="100" rows="5" required ></textarea>

        <BR><i>o envianos un telefono a la siguiente direcci�n: admDoc@gmail.com</i>
        <BR><i> Nuestro telefono: 2664-455667</i>
        <BR><i>Horario: Lunes a Viernes de 10:00 a 13:00</i>
            <br><br>
            <center><INPUT class="boton" TYPE = submit NAME = "Registrar" VALUE = "Registrar">  			 
                    <INPUT class="boton" TYPE = reset NAME = "cancelar" onClick="ConfirmarBorrado(this.form)" VALUE = "Cancelar"></center>
      </form></center>

    </div>
</body>
</html>