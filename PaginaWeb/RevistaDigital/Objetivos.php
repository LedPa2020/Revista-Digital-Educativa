<!DOCTYPE html>

<head>
<meta charset="UTF-8">
<LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css">
<title>Revista Digital Educativa</title>
<link rel="shortcut icon" href="C:\Users\usuario\Desktop\PaginaWeb\HTML\favicon.ico">
<script>
        function abrirMeta(){
  
                Objetivos.style.visibility="hidden";
                Meta.style.visibility="visible"; 
                Fundamento.style.visibility="hidden";
                piedepagina.style.visibility="hidden";
                }
  
        function abrirObj(){
                Objetivos.style.visibility="visible";
                Meta.style.visibility="hidden"; 
                Fundamento.style.visibility="hidden";
                piedepagina.style.visibility="hidden";
                }
        function abrirFun(){
                Objetivos.style.visibility="hidden";
                Meta.style.visibility="hidden"; 
                Fundamento.style.visibility="visible";
                piedepagina.style.visibility="hidden";
                }
</script>
</head>
        
<body > 
<?php
include ("include/menu.php");
?>
               
        <div id=botonJava s><BR><CENTER><input type="button" onclick="abrirObj()" name="Objetivos" value="OBJETIVOS" class="boton">
                <input type="button" onclick="abrirMeta()" name="Meta" value="META" class="boton">
                <input type="button" onclick="abrirFun()" name="Fundamentos" value="FUNDAMENTO" class="boton"></CENTER> 
                <table>
                        <tr>
                        <td><div id="Objetivos" style="visibility:hidden;position:absolute;top: 470px;left:0px">
                                <img width=100% height=100% src="https://scontent.faep9-1.fna.fbcdn.net/v/t1.15752-9/s2048x2048/41457985_315524339181464_6522005686920937472_n.jpg?_nc_cat=0&oh=02738eb016524a5f23b7bddb7a87e2ff&oe=5C3BBE86">
                        </div></td>
                        <td><div id="Meta" style="visibility:hidden;position:absolute;top: 470px;left: 0px" >
                        <img width=100% height=100% src="https://scontent.faep9-1.fna.fbcdn.net/v/t1.15752-9/s2048x2048/41432769_263378854306422_8234420623988752384_n.jpg?_nc_cat=0&oh=8b7bdd9badbf75bbd840d69bc583c348&oe=5C34B6AF"></div>
                        </td>
                        <td>
                        <div id="Fundamento" style="visibility:hidden;position:absolute;top: 470px;left: 0px" >
                        <img width=100% height=100% src="https://scontent.faep9-1.fna.fbcdn.net/v/t1.15752-9/s2048x2048/41378808_2117906748537533_7892160014519894016_n.jpg?_nc_cat=0&oh=1fbbb9c5992d1a8e94659269a2ca9d0f&oe=5C3BBBD7">
                   
                        </div></td>
                        </tr>
                </table>
        </div>
       <?php
        include ("include/PieDePagina.php");
        ?>
       
        </div>
        </body>