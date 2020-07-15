<!DOCTYPE html>
<head>

<meta charset="UTF-8">
<LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css">
<title>Revista Digital Educativa</title>
<link rel="shortcut icon" href="C:\Users\usuario\Desktop\PaginaWeb\HTML\favicon.ico">
<script type="text/javascript">
function abrir1(){
  uno.style.visibility="visible";
  dos.style.visibility="hidden"; 
  tres.style.visibility="hidden";
  cuatro.style.visibility="hidden";
  cinco.style.visibility="hidden";
  seis.style.visibility="hidden";
  piedepagina.style.visibility="hidden";
  }
  function abrir2(){
  
  uno.style.visibility="hidden";
  dos.style.visibility="visible"; 
  tres.style.visibility="hidden";
  cuatro.style.visibility="hidden";
  cinco.style.visibility="hidden";
  seis.style.visibility="hidden";
  piedepagina.style.visibility="hidden";
  }
  function abrir3(){
  
  uno.style.visibility="hidden";
  dos.style.visibility="hidden"; 
  tres.style.visibility="visible";
  cuatro.style.visibility="hidden";
  cinco.style.visibility="hidden";
  seis.style.visibility="hidden";
  piedepagina.style.visibility="hidden";
  }
  function abrir4(){
  
  uno.style.visibility="hidden";
  dos.style.visibility="hidden"; 
  tres.style.visibility="hidden";
  cuatro.style.visibility="visible";
  cinco.style.visibility="hidden";
  seis.style.visibility="hidden";
  piedepagina.style.visibility="hidden";
  }
  function abrir5(){
  
  uno.style.visibility="hidden";
  dos.style.visibility="hidden"; 
  tres.style.visibility="hidden";
  cuatro.style.visibility="hidden";
  cinco.style.visibility="visible";
  seis.style.visibility="hidden";
  piedepagina.style.visibility="hidden";
  }
  function abrir6(){
  
  uno.style.visibility="hidden";
  dos.style.visibility="hidden"; 
  tres.style.visibility="hidden";
  cuatro.style.visibility="hidden";
  cinco.style.visibility="hidden";
  seis.style.visibility="visible";
  piedepagina.style.visibility="hidden";
  }

</script>
</head>
        
<body > 
<?php
      include ("include/menu.php");
?>           
        <div id=contenido style="height:100%"><h1>ELIGE TU CURSO Y DESCARGA LOS ARCHIVOS</h1>
                <div id=botonJava><BR><CENTER>
                    <input type="button" onclick="abrir1()" name="Curso1" value="1°" class="boton">
                    <input type="button" onclick="abrir2()" name="Curso2" value="2°" class="boton">
                    <input type="button" onclick="abrir3()" name="Curso3" value="3°" class="boton">
                    <input type="button" onclick="abrir4()" name="Curso4" value="4°" class="boton">
                    <input type="button" onclick="abrir5()" name="Curso5" value="5°" class="boton">
                    <input type="button" onclick="abrir6()" name="Curso6" value="6°" class="boton">
                </CENTER>  </div>
                <div id="uno" style="visibility:hidden;position:absolute;top: 600px;left:0px"><center>
                    <h1>BIBLIOTECA DE <FONT style="color:BLUE;">PRIMER</FONT> AÑO</h1>
                        <table border="3" cellspacing="0">
                                <tr>
                                        <td><h1>MATERIAL OBLIGATORIO</h1></td>
                                        <td><H1>MATERIAL COMPLEMENTARIO</H1></td>
                                        <td><H1>TRABAJOS PRACTICOS</H1></td>
                
                                    </tr>
                            <tr>
                                <td><a href=""><img src="https://tecnologia-facil.com/wp-content/uploads/2014/10/como-ver-archivos-pdf-1.jpg"
                                         width=479px height=200px></a></td>
                                <td><a href=""><img src="https://tecnologia-facil.com/wp-content/uploads/2014/10/como-ver-archivos-pdf-1.jpg"
                                         width=479px height=200px></a></td>
                                <td><a href=""><img src="https://tecnologia-facil.com/wp-content/uploads/2014/10/como-ver-archivos-pdf-1.jpg"
                                         width=479px height=200px></a></td>
        
                            </tr>
                            <tr>
                                    <td><h3>ARCHIVO1</h3></td>
                                    <td><H3>ARCHIVO2</H3></td>
                                    <td><H3>ARCHIVO3</H3></td>
            
                                </tr>
                           
                        </TABLE>
                    </center></div>
                <div id="dos" style="visibility:hidden;position:absolute;top: 600px;left:0px"> 
                        <h1>BIBLIOTECA DE <FONT style="color:red;">SEGUNDO</FONT> AÑO</h1><center>
                        <table border="3" cellspacing="0">
                                <tr>
                                        <td><h1>MATERIAL OBLIGATORIO</h1></td>
                                        <td><H1>MATERIAL COMPLEMENTARIO</H1></td>
                                        <td><H1>TRABAJOS PRACTICOS</H1></td>
                
                                    </tr>
                            <tr>
                                <td><a href=""><img src="http://carmenverdeluna.com/wp-content/uploads/2015/09/PDF-Small-300x300.jpg"
                                         width=479px height=200px></a></td>
                                <td><a href=""><img src="http://carmenverdeluna.com/wp-content/uploads/2015/09/PDF-Small-300x300.jpg"
                                         width=479px height=200px></a></td>
                                <td><a href=""><img src="http://carmenverdeluna.com/wp-content/uploads/2015/09/PDF-Small-300x300.jpg"
                                         width=479px height=200px></a></td>
        
                            </tr>
                            <tr>
                                    <td><h3>ARCHIVO1</h3></td>
                                    <td><H3>ARCHIVO2</H3></td>
                                    <td><H3>ARCHIVO3</H3></td>
            
                                </tr>
                            
                        </TABLE>
                    </center></div>
                <div id="tres" style="visibility:hidden;position:absolute;top: 600px;left:0px">
                        <h1>BIBLIOTECA DE <FONT style="color:green;">TERCER</FONT> AÑO</h1><center>
                        <table border="3" cellspacing="0">
                                <tr>
                                        <td><h1>MATERIAL OBLIGATORIO</h1></td>
                                        <td><H1>MATERIAL COMPLEMENTARIO</H1></td>
                                        <td><H1>TRABAJOS PRACTICOS</H1></td>
                
                                    </tr>
                            <tr>
                                <td><a href=""><img src="https://st2.depositphotos.com/1732591/9786/v/950/depositphotos_97860666-stock-illustration-pdf-file-download-icon.jpg"
                                         width=479px height=200px></a></td>
                                <td><a href=""><img src="https://st2.depositphotos.com/1732591/9786/v/950/depositphotos_97860666-stock-illustration-pdf-file-download-icon.jpg"
                                         width=479px height=200px></a></td>
                                <td><a href=""><img src="https://st2.depositphotos.com/1732591/9786/v/950/depositphotos_97860666-stock-illustration-pdf-file-download-icon.jpg"
                                         width=479px height=200px></a></td>
        
                            </tr>
                            <tr>
                                    <td><h3>ARCHIVO1</h3></td>
                                    <td><H3>ARCHIVO2</H3></td>
                                    <td><H3>ARCHIVO3</H3></td>
            
                                </tr>
                        </TABLE>
                    </center></div>
                <div id="cuatro" style="visibility:hidden;position:absolute;top: 600px;left:0px">
                        <h1>BIBLIOTECA DE <FONT style="color:orangered;">CUARTO</FONT> AÑO</h1><center>
                        <table border="3" cellspacing="0">
                                <tr>
                                        <td><h1>MATERIAL OBLIGATORIO</h1></td>
                                        <td><H1>MATERIAL COMPLEMENTARIO</H1></td>
                                        <td><H1>TRABAJOS PRACTICOS</H1></td>
                
                                    </tr>
                            <tr>
                                <td><a href=""><img src="https://st2.depositphotos.com/1431107/10831/v/950/depositphotos_108313632-stock-illustration-download-pdf-file-button.jpg"
                                         width=479px height=200px></a></td>
                                <td><a href=""><img src="https://st2.depositphotos.com/1431107/10831/v/950/depositphotos_108313632-stock-illustration-download-pdf-file-button.jpg"
                                         width=479px height=200px></a></td>
                                <td><a href=""><img src="https://st2.depositphotos.com/1431107/10831/v/950/depositphotos_108313632-stock-illustration-download-pdf-file-button.jpg"
                                         width=479px height=200px></a></td>
        
                            </tr>
                            <tr>
                                    <td><h3>ARCHIVO1</h3></td>
                                    <td><H3>ARCHIVO2</H3></td>
                                    <td><H3>ARCHIVO3</H3></td>
            
                                </tr>
                        </TABLE>
                    </center></div>
                <div id="cinco" style="visibility:hidden;position:absolute;top: 600px;left:0px">
                        <h1>BIBLIOTECA DE <FONT style="color:yellowgreen;">QUINTO</FONT> AÑO</h1><center>
                        <table border="3" cellspacing="0">
                                <tr>
                                        <td><h1>MATERIAL OBLIGATORIO</h1></td>
                                        <td><H1>MATERIAL COMPLEMENTARIO</H1></td>
                                        <td><H1>TRABAJOS PRACTICOS</H1></td>
                
                                    </tr>
                            <tr>
                                <td><a href=""><img src="http://www.gruppoini.it/nuovo/wp-content/uploads/2018/04/file-pdf-download-acrobat-adobe-reader.png"
                                         width=479px height=200px></a></td>
                                <td><a href=""><img src="http://www.gruppoini.it/nuovo/wp-content/uploads/2018/04/file-pdf-download-acrobat-adobe-reader.png"
                                         width=479px height=200px></a></td>
                                <td><a href=""><img src="http://www.gruppoini.it/nuovo/wp-content/uploads/2018/04/file-pdf-download-acrobat-adobe-reader.png"
                                         width=479px height=200px></a></td>
        
                            </tr>
                            <tr>
                                    <td><h3>ARCHIVO1</h3></td>
                                    <td><H3>ARCHIVO2</H3></td>
                                    <td><H3>ARCHIVO3</H3></td>
            
                                </tr>
                        </TABLE>
                    </center></div>
                <div id="seis" style="visibility:hidden;position:absolute;top: 600px;left:0px">
                        <h1>BIBLIOTECA DE <FONT style="color:rgb(0, 0, 0);font-style: italic">SEXTO</FONT> AÑO</h1><center>
                        <table border="3" cellspacing="0">
                                <tr>
                                        <td><h1>MATERIAL OBLIGATORIO</h1></td>
                                        <td><H1>MATERIAL COMPLEMENTARIO</H1></td>
                                        <td><H1>TRABAJOS PRACTICOS</H1></td>
                
                                    </tr>
                            <tr>
                                <td><a href=""><img src="https://tecnologia-facil.com/wp-content/uploads/2014/10/como-ver-archivos-pdf-1.jpg"
                                         width=479px height=200px></a></td>
                                <td><a href=""><img src="https://tecnologia-facil.com/wp-content/uploads/2014/10/como-ver-archivos-pdf-1.jpg"
                                         width=479px height=200px></a></td>
                                <td><a href=""><img src="https://tecnologia-facil.com/wp-content/uploads/2014/10/como-ver-archivos-pdf-1.jpg"
                                         width=479px height=200px></a></td>
        
                            </tr>
                            <tr>
                                    <td><h3>ARCHIVO1</h3></td>
                                    <td><H3>ARCHIVO2</H3></td>
                                    <td><H3>ARCHIVO3</H3></td>
            
                                </tr>
                        </TABLE>
                    </center></div>
                   

                
                
            </div>
            
            
            <?php
      include ("include/PieDePagina.php");
?>  
       

</body>
</html>
