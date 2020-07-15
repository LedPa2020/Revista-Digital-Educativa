<!DOCTYPE html>
    <head>

	  <meta charset="UTF-8">
    <LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css">
    <title>Revista Digital Educativa</title>
    <link rel="shortcut icon" href="C:\Users\usuario\Desktop\PaginaWeb\HTML\favicon.ico">
    </head>

    <body > 
        <?php
            include ("include/conexion.php");
            include ("include/menu.php");
	
             $respuesta="";$nombre="";
            if (!empty($_REQUEST["respuesta"])) {$respuesta = $_REQUEST["respuesta"];}
            if (!empty($_REQUEST["nombre"])) {$nombre = $_REQUEST["nombre"];}
        ?>
    <div id="contacto" class="Registro"><br>
    
    <center><h1> <B>RESPONDE LA CONSULTA:</B></H1><br><br></center>
    <center>
    <FORM name="FormCon" ACTION="contacto_agregar_execute.php?Form=agregarContacto" METHOD= "POST">
    <INPUT class="caja"  onfocus="this.placeholder=''" onBlur="this.placeholder='NOMBRE*'" TYPE = "TEXT" value="<?=$nombre?>" NAME = "nombre" id = "nombre" placeholder="NOMBRE*" required> <P></P>
    <BR><textarea value="<?=$respuesta?>" name="respuesta" id = "respuesta" cols="100" rows="5" required ></textarea>
    <center><INPUT class="boton" TYPE = submit NAME = "Registrar" VALUE = "ENVIAR">  			 
                    <INPUT class="boton" TYPE = reset NAME = "cancelar" VALUE = "CANCELAR"></center>
      </form></center>

    </div>

       
  </body>
  </html>

