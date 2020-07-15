<!DOCTYPE html>

    <head>
        <meta charset="UTF-8">
        <LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css">
        <title>Revista Digital Educativa</title>
        <link rel="shortcut icon" href="C:\xampp\htdocs\PaginaWeb\RevistaDigital\favicon.ico">
        <script type="text/javascript">
            function ConfirmarBorrado(form)
            {
            borrar = window.confirm('¿Desea borrar todos los datos del formulario?');
            (borrar)?form.reset():'return false';
            }
            
            function deshabilita(form)
            {
                if ((form.dni.value != "") &&(form.usuario.value != "")&& (form.correo.value != "")&& (form.contra.value != ""))
                { form.Registrar.disabled = false;
                    form.Registrar.hidden = false; }
            
                else {
                form.Registrar.disabled = true;
                form.Registrar.hidden = true; }
            } 
            function validarEntero(valor){ 
    
                    valor = parseInt(valor) 

                    if (isNaN(valor)) { 
                        return "" 
                    }else{ 
                        return valor 
                    } 
                } 
            function valida_envia(formulario){
                var checkOK = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚ" + "abcdefghijklmnñopqrstuvwxyzáéíóú ";
                var checkStr = formDoc.nombre.value;
                var allValid = true; 
                for (i = 0; i < checkStr.length; i++) {
                ch = checkStr.charAt(i); 
                for (j = 0; j < checkOK.length; j++)
                    if (ch == checkOK.charAt(j))
                    break;
                if (j == checkOK.length) { 
                    allValid = false; 
                    break; 
                }
                }
                if (!allValid) { 
                alert("Escriba sólo letras en el campo \"nombre\"."); 
                formDoc.nombre.focus(); 
                return false; 
                } 
                var checkOK = "0123456789"; 
                var checkStr = formDoc.dni.value; 
                var allValid = true; 
                var decPoints = 0; 
                var allNum = ""; 
                for (i = 0; i < checkStr.length; i++) { 
                ch = checkStr.charAt(i); 
                for (j = 0; j < checkOK.length; j++) 
                    if (ch == checkOK.charAt(j))
                    break; 
                if (j == checkOK.length) { 
                    allValid = false; 
                    break; 
                } 
                allNum += ch; 
                } 
                if (!allValid) { 
                alert("Escriba sólo dígitos en el campo \"dni\".");
                formDoc.dni.focus(); 
                return false; 
                } 
                if ((formDoc.correo.value.indexOf ('@', 0) == -1)||(formDoc.correo.value.length < 5)) { 
                alert("Escriba una dirección de correo válida en el campo \"correo\"."); 
                formDoc.correo.focus();
                return false; 
                }


                edad1 = document.formDoc.dia.value;
                edad1 = validarEntero(edad1);
                document.formDoc.dia.value=edad1;
                    if (edad1>30 || edad1<0 || edad1.length==0){
                        alert("Debe ingresar un dia valido.");
                        document.formDoc.dia.focus();
                        return false;
                    }
                añoI1 = document.formDoc.año.value;
                añoI1 = validarEntero(añoI1);
                document.formDoc.año.value=añoI1;
                    if (añoI1>2010 || añoI1<1900){
                        alert("Debe ingresar un año valido.");
                        document.formDoc.año.focus();
                        return false;
                    }
                if (document.formDoc.mes.selectedIndex==0){
                    alert("Debe seleccionar un mes.");
                    document.formDoc.mes.focus();
                    return false;
                }
                if(document.formDoc.terminos.selectedIndex==0) {
                alert("Acepte los terminos");
                document.formDoc.terminos.focus();
                return false;
                } 
                    alert("Muchas gracias por Registrar el formulario");
                    document.formDoc.submit();
                    
                }
        </script>
        
    </head>
        
    <body> 
        <?php
            include ("include/conexion.php");
            include ("include/menu.php");
            $nombre=""; $apellido=""; $dni=""; $correo=""; $usuario=""; $contra=""; $sexo=""; $fechaNacimiento="1995-12-31";
            if (!empty($_REQUEST["nombre"])) {$nombre = $_REQUEST["nombre"];}
            if (!empty($_REQUEST["apellido"])) {$apellido = $_REQUEST["apellido"];}
            if (!empty($_REQUEST["dni"])) {$correo = $_REQUEST["dni"];}
            if (!empty($_REQUEST["correo"])) {$correo = $_REQUEST["correo"];}
            if (!empty($_REQUEST["usuario"])) {$usuario = $_REQUEST["usuario"];}
            if (!empty($_REQUEST["contra"])) {$contra = $_REQUEST["contra"];}
            if (!empty($_REQUEST["sexo"])) {$sexo = $_REQUEST["sexo"];}
            if (!empty($_REQUEST["fechaNacimiento"])) {$fechaNacimiento = $_REQUEST["fechaNacimiento"];}
        ?>            
               
    


        <div id="registro docente" class="Registro">
            <center><H1> <b>REGISTRO DE DOCENTE:</b>  </H1></center><br><center><h3><b>Completa con tus datos:</b> </h3><i>*Campos obligatorios</i></center><br>
            <FORM name="formDoc" ACTION="RegistroDocente_execute.php?Form=agregarDocente" METHOD= "POST">   
        <div class="Registro" >
            <div class="item1"><INPUT Value="<?=$nombre?>" class="caja" onfocus="this.placeholder=''" onBlur="this.placeholder='NOMBRE'" TYPE = "TEXT" ID = "nombre" NAME = "nombre" placeholder="NOMBRE"> <P></P></div>
            <div class="item2"><INPUT Value="<?=$apellido?>" class="caja" onfocus="this.placeholder=''" onBlur="this.placeholder='APELLIDO'" TYPE = "TEXT" id="apellido" NAME = "apellido" placeholder="APELLIDO"> <P></P></div>
            <div class="item3"><INPUT Value="<?=$dni?>" class="caja" onKeyUp="deshabilita(this.form)" TYPE = "TEXT" id="dni" NAME = "dni" placeholder="DNI*" required > <P></P></div> 
            <div class="item4"><INPUT Value="<?=$correo?>" class="caja" onKeyUp="deshabilita(this.form)" onfocus="this.placeholder=''" onBlur="this.placeholder='CORREO*'" TYPE = "email" NAME = "correo" id="correo" placeholder="CORREO*" required> <P></P></div> 
            <div class="item5"><INPUT Value="<?=$usuario?>" class="caja" onKeyUp="deshabilita(this.form)" onfocus="this.placeholder=''" onBlur="this.placeholder='NOMBRE USUARIO*'" TYPE = "TEXT" ID="usuario" NAME = "usuario" placeholder="NOMBRE USUARIO*" required><P></P></div>
            <div class="item6"><INPUT Value="<?=$contra?>" class="caja" onKeyUp="deshabilita(this.form)"onfocus="this.placeholder=''" onBlur="this.placeholder='CONTRASEÑA'" TYPE = "PASSWORD" id="contra" NAME = "contra" placeholder = "CONTRASEÑA*" required><br><br></div>
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
            <center><INPUT class = "boton" TYPE = submit NAME = "Registrar" onclick = "return valida_envia(this)"  VALUE = "Registrar" hidden>  			 
            <INPUT class = "boton" TYPE = reset NAME = "cancelar" onClick="ConfirmarBorrado(this.form)" VALUE = "Cancelar"></center>  </FORM>
    </div>


    
    

</body>
</html>