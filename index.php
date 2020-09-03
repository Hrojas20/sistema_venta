<?php
include("conec.php")

?>

<!DOCTYPE html PUBLIC "_//W3C//DTD XHTML"
<html xmlns="http://www.w3.org/1999/xhtml">
<html> 
 <head> 
 <meta  http-equiv="Content-Type" conten="text/html; 
 charset=utf-8"/>
   <title>Nuestro primer proyecto en php, css y javaScript (Enricoti)</title> 
   <style type="text/css">
   #titulo{
     text-align: center;
     font-weight:bold;
     font-style:
   }
 </head> 
 
  <body bgcolor="#5ff4ff">
    </body>italic;
    background:#F99;

  }
  #imagen{
    text-align: center;
  }

  </style>
  </head>
  <body id="cuerpo">
  <h1><font color="red"><p  id="titulo">SISTEMA DE VENTAS </p></font></h1>

  <body background="imagen/2.jpg"></body>
  <form id="forml" name="forml" method="post" action="validar.php">
  <div align="center">
  <table width="500"border="0">
  <tr>
  <td colspan="2" bgcolor="#00FF99"><div align="center">
  <strong>Ingrese datos</strong></div></td>      
  </tr> 
  <tr>
  <td colspan="2" bgcolor="#00ff99">



</td>
</tr>
<tr>

  <td bgcolor="#00FF99">Usuario:</td>
  <td bycolor="#00FF99"><label>
  <input type="text" name="usu" id="textfield"/>
  </label></td>
  </tr>
  <tr>
  <td bgcolor="#00FF99">Contraseña:</td>
  <td bgcolor="#00FF99"><label>
  <input type="password" name="con" id="textfield2"/>
 </label></td>
 </tr>
 <tr>
<td bgcolor="#00FF99">&nbsp;</td>
<td bgcolor="#00FF99"><label>

  <input type="submit" name="button" id="button" value="Ingresar"/> 
  </label></td>
  </tr>
  <tr>
  <td colspan="2" bgcolor="#00FF99" id="imagen">
  <img src="imagen/1.jpg" width="500" height="300"/>
  </td>
  </tr>
 </table>
 </div>
 </form>
 </body>
  </html>