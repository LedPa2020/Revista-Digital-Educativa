<html>
    <head>
        <meta charset="UTF-8">
        <title>RDE Manager - Editar Docente</title>
        <LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css">
        <script type="text/javascript">
	    window.location="<?=$FormRedirect?>";
        </script>
        
    </head>
    
    <body onLoad="document.formDoc.dni.focus();">
        <?php
            include ("include/conexion.php");
            include ("include/menuAdmin.php");
            $nombre=""; $apellido=""; $dni=""; $correo=""; $usuario=""; $contra=""; $sexo=""; $fechaNacimiento="1995-12-31"; $action="";$FormRedirect="";
            if (!empty($_REQUEST["action"])) {$action = $_REQUEST["action"];}
            if (!empty($_REQUEST["nombre"])) {$nombre = $_REQUEST["nombre"];}
            if (!empty($_REQUEST["apellido"])) {$apellido = $_REQUEST["apellido"];}
            if (!empty($_REQUEST["dni"])) {$dni = $_REQUEST["dni"];}
            if (!empty($_REQUEST["correo"])) {$correo = $_REQUEST["correo"];}
            if (!empty($_REQUEST["usuario"])) {$usuario = $_REQUEST["usuario"];}
            if (!empty($_REQUEST["contra"])) {$contra = $_REQUEST["contra"];}
            if (!empty($_REQUEST["sexo"])) {$sexo = $_REQUEST["sexo"];}
            if (!empty($_REQUEST["fechaNacimiento"])) {$fechaNacimiento = $_REQUEST["fechaNacimiento"];}
            
            
            if ($action == "update")
            {
                $SQL = "UPDATE docente SET 
                nombre = '$nombre', 
                apellido = '$apellido', 
                 
                correo = '$correo',
                nombre_usuario = '$usuario',
                contra = '$contra',
                sexo = '$sexo',
                fechaNacimiento = '$fechaNacimiento' 
                WHERE docente.dni = ".$dni.";";
                $cn->query($SQL);
                $FormRedirect = "docente_buscar.php";
                header ("Location:docente_buscar.php");
                

                
               
            }
            
            if (!empty($dni))
            {
                $docentes = $cn->query("SELECT * FROM docente WHERE docente.dni =".$dni."");
                if ($fila=$docentes->fetch_assoc())
                {
                    $nombre = $fila["nombre"];
                    $apellido = $fila["apellido"];
                    $dni = $fila["dni"];
                    $correo = $fila["correo"];
                    $usuario = $fila["nombre_usuario"];
                    $contra = $fila["contra"];
                    $sexo = $fila["sexo"];
                    $fechaNacimiento = $fila["fechaNacimiento"];
                }
            }
        ?> 
        
        <div id="registro docente" class="Registro">
            <center><H1> <b>REGISTRO DE DOCENTE:</b>  </H1></center><br><center><h3><b>Completa con tus datos:</b> </h3><i>*Campos obligatorios</i></center><br>
            <FORM name="formDoc" ACTION="docente_editar.php?action=update&dni=<?=$dni?>" METHOD= "post">   
        <div class="Registro" >
            <div class="item1"><INPUT Value="<?=$nombre?>" class="caja" onfocus="this.placeholder=''" onBlur="this.placeholder='NOMBRE'" TYPE = "TEXT" ID = "nombre" NAME = "nombre" placeholder="NOMBRE"> <P></P></div>
            <div class="item2"><INPUT Value="<?=$apellido?>" class="caja" onfocus="this.placeholder=''" onBlur="this.placeholder='APELLIDO'" TYPE = "TEXT" id="apellido" NAME = "apellido" placeholder="APELLIDO"> <P></P></div>
             
            <div class="item4"><INPUT Value="<?=$correo?>" class="caja" onKeyUp="deshabilita(this.form)" onfocus="this.placeholder=''" onBlur="this.placeholder='CORREO*'" TYPE = "email" NAME = "correo" id="correo" placeholder="CORREO*" required> <P></P></div> 
            <div class="item5"><INPUT Value="<?=$usuario?>" class="caja" onKeyUp="deshabilita(this.form)" onfocus="this.placeholder=''" onBlur="this.placeholder='NOMBRE USUARIO*'" TYPE = "TEXT" ID="usuario" NAME = "usuario" placeholder="NOMBRE USUARIO*" required><P></P></div>
            <div class="item6"><INPUT Value="<?=$contra?>" class="caja" onKeyUp="deshabilita(this.form)"onfocus="this.placeholder=''" onBlur="this.placeholder='contra'" TYPE = "PASSWORD" id="contra" NAME = "contra" placeholder = "contra*" required><br><br></div>
            <div class="item7">				 	 
                <INPUT TYPE = radio id="sexo" NAME = "sexo" Value="Hombre"  CHECKED> HOMBRE 	 
                <INPUT TYPE = radio id="sexo" NAME = "sexo" Value="Mujer" > MUJER</div>
            <div class="item8">
                <br> <CENTER> 
                <input class="caja" type="date" name="fechaNacimiento" id="fechaNacimiento" step="1" min="1950-01-01" max="2005-12-31" value="<?=$fechaNacimiento?>" >
                </CENTER> <br> </div>	  		 
            <div class="item9"><INPUT Type="CheckBox" name=chk1 required >Acepta los terminos y condiciones.                  
            </div>
      
            <br><br>
    
            <center><INPUT class = "boton" TYPE = submit NAME = "Registrar" VALUE = "Registrar"  >  			 
            <INPUT class = "boton" TYPE = button NAME = "cancelar" onClick="window.location='docente_buscar.php';" VALUE = "Cancelar"></center>  </FORM>
    </div>


   
    

</body>
</html>