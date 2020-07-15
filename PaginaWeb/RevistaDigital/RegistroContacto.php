<!DOCTYPE html>
  <head>

	  <meta charset="UTF-8">
    <LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css">
    <title>Revista Digital Educativa</title>
    <link rel="shortcut icon" href="C:\Users\usuario\Desktop\PaginaWeb\HTML\favicon.ico">
    
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
        function ConfirmarBorrado(form)
        {
        borrar = window.confirm('¿Desea borrar todos los datos del formulario?');
        (borrar)?form.reset():'return false';
        }


        function valida_envia(formulario){
          var checkOK = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚ" + "abcdefghijklmnñopqrstuvwxyzáéíóú ";
          var checkStr = FormCon.nombre.value;
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
          FormCon.nombre.focus(); 
          return false; 
        } var checkStr1 = FormCon.apellido.value;
          var allValid1 = true; 
          for (i = 0; i < checkStr1.length; i++) {
          ch = checkStr1.charAt(i); 
          for (j = 0; j < checkOK.length; j++)
            if (ch == checkOK.charAt(j))
              break;
          if (j == checkOK.length) { 
            allValid1 = false; 
            break; 
          }
        }
        if (!allValid1) { 
          alert("Escriba sólo letras en el campo \"apellido\"."); 
          FormCon.apellido.focus(); 
          return false; 
        }
        if ((FormCon.correo.value.indexOf ('@', 0) == -1)||(FormCon.correo.value.length < 5)) { 
          alert("Escriba una dirección de correo válida en el campo \"correo\"."); 
          FormCon.correo.focus();
          return false; 
        }
        var checkOK = "0123456789"; 
        var checkStr2 = FormCon.telefono.value; 
        var allValid2 = true; 
        var decPoints = 0; 
        var allNum = ""; 
        for (i = 0; i < checkStr2.length; i++) { 
          ch = checkStr2.charAt(i); 
          for (j = 0; j < checkOK.length; j++) 
            if (ch == checkOK.charAt(j))
              break; 
          if (j == checkOK.length) { 
            allValid2 = false; 
            break; 
          } 
          allNum += ch; 
        } 
        if (!allValid2) { 
          alert("Escriba sólo dígitos en el campo \"telefono\".");
          FormDoc.telefono.focus(); 
          return false; 
        }
        if(FormCon.texto.value.length== ""){
          alert("Escriba el motivo de contacto.");
        } 
              return true;
        }
    </script>
  </head>

  <body > 
  <?php
        include ("include/conexion.php");
        include ("include/menuAlumno.php");
        session_start();
        $varsesion = $_SESSION['usuario'];
        if($varsesion==null || $varsesion = '') {
            echo "Usted no tiene autorizacion";
            die();
        }
        $nombre=""; $apellido=""; $correo=""; $telefono=""; $texto="";
        if (!empty($_REQUEST["nombre"])) {$nombre = $_REQUEST["nombre"];}
        if (!empty($_REQUEST["apellido"])) {$apellido = $_REQUEST["apellido"];}
        if (!empty($_REQUEST["correo"])) {$correo = $_REQUEST["correo"];}
        if (!empty($_REQUEST["telefono"])) {$telefono = $_REQUEST["telefono"];}
        if (!empty($_REQUEST["texto"])) {$texto = $_REQUEST["texto"];}
  
      ?>


       
    <div id="contacto" class="Registro"><br>
    
      <center><h1> <B>DATOS DE CONTACTO:</B> </h1> <i>*Campos obligatorios</i><br><br></center>
      <center>
      <FORM name="FormCon" ACTION="RegistroContacto_execute.php?Form=agregarContacto" METHOD= "POST" onsubmit="return valida_envia(this)">
        <INPUT class="caja"  onfocus="this.placeholder=''" onBlur="this.placeholder='NOMBRE*'" TYPE = "TEXT" value="<?=$nombre?>" NAME = "nombre" id = "nombre" placeholder="NOMBRE*" required> <P></P>
        <INPUT class="caja"  onfocus="this.placeholder=''" onBlur="this.placeholder='APELLIDO*'" TYPE = "TEXT" value="<?=$apellido?>" NAME = "apellido" id = "apellido" placeholder="APELLIDO*" required> <P></P>
        <INPUT class="caja"  onfocus="this.placeholder=''" onBlur="this.placeholder='CORREO*'" TYPE = "TEXT" value="<?=$correo?>" NAME = "correo" id = "correo" placeholder="CORREO*" required> <P></P>
        <INPUT class="caja"  onfocus="this.placeholder=''" onBlur="this.placeholder='TELEFONO*'" TYPE = "TEL" value="<?=$telefono?>" NAME = "telefono" id = "telefono" placeholder="TELEFONO*" required><P></P>
        <b>COMENTANOS LA SITUACION*:</b><BR><textarea value="<?=$texto?>" name="texto" id = "texto" cols="100" rows="5" required ></textarea>

        <BR><i>o envianos un telefono a la siguiente dirección: admDoc@gmail.com</i>
        <BR><i> Nuestro telefono: 2664-455667</i>
        <BR><i>Horario: Lunes a Viernes de 10:00 a 13:00</i>
            <br><br>
            <center><INPUT class="boton" TYPE = submit NAME = "Registrar" VALUE = "Registrar">  			 
                    <INPUT class="boton" TYPE = reset NAME = "cancelar" onClick="ConfirmarBorrado(this.form)" VALUE = "Cancelar"></center>
      </form></center>

    </div>

       
  </body>
