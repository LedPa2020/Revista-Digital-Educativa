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
            
          function deshabilita(formAlu)
            {
                if ((formAlu.dni.value != "") &&(formAlu.nombre_apellido.value != "")&& (formAlu.correo.value != "")&& (formAlu.contra.value != "") && (formAlu.nombre_usuario.value != ""))
                { formAlu.Registrar.disabled = false;
                 }
            
                else {
                formAlu.Registrar.disabled = true;
                }
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
            if (document.formAlu.nombre_apellido.value.length<4){
            alert("Escriba por lo menos 4 caracteres en el campo \"nombre_apellido\".");
             document.formAlu.nombre_apellido.focus();
            return false;
            }
            if (document.formAlu.nombre_usuario.value.length<4){
            alert("Escriba por lo menos 4 caracteres en el campo \"nombre_usuario\".");
            document.formAlu.nombre_usuario.focus();
            return false;
            }
            var checkOK = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚ" + "abcdefghijklmnñopqrstuvwxyzáéíóú ";
            var checkStr = formAlu.nombre_apellido.value;
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
                alert("Escriba sólo letras en el campo \"nombre_usuario\"."); 
                formAlu.nombre_usuario.focus(); 
                return false; 
            } 
            var checkOK = "0123456789"; 
            var checkStr = formAlu.dni.value; 
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
                formAlu.dni.focus(); 
                return false; 
            } 
            if ((formAlu.correo.value.indexOf ('@', 0) == -1)||(formAlu.correo.value.length < 5)) { 
                alert("Escriba una dirección de correo válida en el campo \"correo\"."); 
                formAlu.correo.focus();
                return false; 
            }
            
                if (document.formAlu.curso.selectedIndex==0){
                alert("Debe seleccionar un curso.");
                document.formAlu.curso.focus();
                return false;
            }
            if (document.formAlu.division.selectedIndex==0){
                alert("Debe seleccionar su division.");
                document.formAlu.division.focus();
                return false;
            }
            edad = document.formAlu.dia.value;
            edad = validarEntero(edad);
            document.formAlu.dia.value=edad;
                if (edad>30 || edad<0 || edad.length==0){
                    alert("Debe ingresar un dia valido.");
                    document.formAlu.dia.focus();
                    return false;
                }
            añoI = document.formAlu.año.value;
            añoI = validarEntero(añoI);
            document.formAlu.año.value=añoI;
                if (añoI>2010 || añoI<1900){
                    alert("Debe ingresar un año valido.");
                    document.formAlu.año.focus();
                    return false;
                }
            if (document.formAlu.Mes.selectedIndex==0){
                alert("Debe seleccionar un mes.");
                document.formAlu.Mes.focus();
                return false;
            }
            if(document.formAlu.terminos.selectedIndex==0) {
                alert("Acepte los terminos");
                document.formAlu.terminos.focus();
                return false;
            } else {

            }
                    alert("Muchas gracias por registrarse, esperamos que disfrutes el sitio web.");
                    document.formAlu.submit();
                
            }
        </script>
    </head>
        
    <body onLoad="document.formAlu.dni.focus();"> 
        <?php
            include ("include/conexion.php");
            include ("include/menu.php");

            

            


            $nombre_apellido=""; $dni=""; $correo=""; $nombre_usuario=""; $contra=""; $sexo=""; $curso=""; $division=""; $orientacion="";$fechaNacimiento="1995-12-31";
            if (!empty($_REQUEST["nombre_apellido"])) {$nombre_apellido = $_REQUEST["nombre_apellido"];}
            if (!empty($_REQUEST["dni"])) {$dni = $_REQUEST["dni"];}
            if (!empty($_REQUEST["correo"])) {$correo = $_REQUEST["correo"];}
            if (!empty($_REQUEST["nombre_usuario"])) {$nombre_usuario = $_REQUEST["nombre_usuario"];}
            if (!empty($_REQUEST["contra"])) {$contra = $_REQUEST["contra"];}
            if (!empty($_REQUEST["sexo"])) {$sexo = $_REQUEST["sexo"];}
            if (!empty($_REQUEST["curso"])) {$curso = $_REQUEST["curso"];}
            if (!empty($_REQUEST["division"])) {$division = $_REQUEST["division"];}
            if (!empty($_REQUEST["orientacion"])) {$orientacion = $_REQUEST["orientacion"];}
            if (!empty($_REQUEST["fechaNacimiento"])) {$fechaNacimiento = $_REQUEST["fechaNacimiento"];}
        ?>
        
        <div id="registro alumno" class="Registro" >
            <center><H1> <b>REGISTRO DE ALUMNO:</b>  </H1></center><br><center><h3><b>Completa con tus datos:</b> </h3><i>*Campos obligatorios</i></center><br>
            <FORM ACTION="RegistroAlumno_execute.php?Form=agregarAlumno" name="formAlu" METHOD= "POST" >   
            <div class="Registro">
                    <div class="item1"><INPUT class="caja" Value="<?=$nombre_apellido?>" onfocus="this.placeholder=''"     TYPE = "TEXT"     id="nombre_apellido" NAME = "nombre_apellido"        placeholder="NOMBRE Y APELLIDO*" onKeyUp="deshabilita(this.form)" onBlur="this.placeholder='NOMBRE Y APELLIDO*'"  required> <P></P></div>
                    <div class="item2"><INPUT class="caja" value="<?=$dni?>"             onfocus="this.placeholder='DNI*'" TYPE = "TEXT"     id="dni"            NAME = "dni"           placeholder="DNI*" required autofocus onKeyUp="deshabilita(this.form)" onkeypress=controlcant(evt)> <P></P></div> 
                    <div class="item4"><INPUT class="caja" value="<?=$correo?>"          onfocus="this.placeholder=''"     TYPE = "email"    id="correo"         NAME = "correo"        placeholder="CORREO*" required onKeyUp="deshabilita(this.form)" onBlur="this.placeholder='CORREO*'" > <P></P></div> 
                    <div class="item5"><INPUT class="caja" value="<?=$nombre_usuario?>"  onfocus="this.placeholder=''"     TYPE = "TEXT"     id="nombre_usuario" NAME = "nombre_usuario" placeholder="NOMBRE USUARIO*" required onKeyUp="deshabilita(this.form)" onBlur="this.placeholder='NOMBREUSUARIO'" ><P></P></div>
                    <div class="item6"><INPUT class="caja" value="<?=$contra?>"      onfocus="this.placeholder=''" TYPE = "PASSWORD"     id="contra"     NAME = "contra"    placeholder = "CONTRASEÑA*" required onKeyUp="deshabilita(this.form)" onBlur="this.placeholder='CONTRASEÑA*'" ><br><br></div>
                    <div class="item7">				 	 
                        <INPUT TYPE = radio  id="sexo" NAME = "sexo" value="Hombre"  CHECKED> HOMBRE 	 
                        <INPUT TYPE = radio  id="sexo" NAME = "sexo" value="Mujer" > MUJER</div>
                    <div class="item8"><br>
                        <center>
                        <table class="caja">
                        <tr>
                        <td><SELECT id="curso" name= "curso" value="<?=$curso?>" SIZE = 1 required> 		 
                                <OPTION SELECTED VALUE = "0" disabled>Curso</OPTION>
                                <OPTION VALUE = "1">1</OPTION> 	 
                                <OPTION VALUE = "2">2 </OPTION> 
                                <OPTION VALUE = "3">3</OPTION>
                                <OPTION VALUE = "4">4</OPTION>
                                <OPTION VALUE = "5">5</OPTION>
                                <OPTION VALUE = "6">6</OPTION>                              
                            </SELECT></td>
                        <td><SELECT id="division" NAME = "division" value="<?=$division?>" SIZE = 1 required> 		 
                                <OPTION SELECTED VALUE = "0" disabled>Division </OPTION>
                                <OPTION VALUE = "A">A </OPTION> 	 
                                <OPTION VALUE = "B">B </OPTION> 
                                <OPTION VALUE = "C">C</OPTION>
                                <OPTION VALUE = "D">D</OPTION>

                                </SELECT></td>
                                </tr>
                        </table>                      
                        </center> 
                        <BR>                              
                        </div>
                    <div class="item9"><center>¿Que curso pensas elegir en el futuro?</center>		<BR>	 	 
                        <INPUT  TYPE = radio  id="orientacion" NAME = "orientacion" VALUE ="HUMANISTICO" > HUMANISTICO	 
                        <INPUT  TYPE = radio  id="orientacion" NAME = "orientacion" VALUE ="CIENTIFICO" > CIENTIFICO
                        <INPUT  TYPE = radio  id="orientacion" NAME = "orientacion" VALUE ="ADMINISTRATIVO" > ADMINISTRATIVO                                  
                    </div>
                    <div class="item10">
                        <br><CENTER> 
                        <input class="caja" type="date" name="fechaNacimiento" id="fechaNacimiento" step="1" min="1950-01-01" max="2005-12-31" value="<?=$fechaNacimiento?>" >
                        </CENTER> 
                    </div>	  		
                    	 <br>
                    <div class="item11">
                        <INPUT Type="CheckBox" name=terminos id=terminos required >Acepta los terminos y condiciones.                                             
                    </div>
                  
                    <div class="item12">
                        <br><br>
                        <center>
                        <INPUT class="boton" TYPE = submit NAME = "Registrar"   VALUE = "Registrar" onclick = "return valida_envia(this)" DISABLED>  			 
                        <INPUT class="boton" TYPE = reset  NAME = "cancelar" VALUE = "Cancelar"  onClick="ConfirmarBorrado(this.form)"></center>  </FORM>
                    </div>
            </div>
            
     


</body>
</html>