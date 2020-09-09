
<!DOCTYPE html PUBLIC "_//W3C//DTD XHTML"
<html xmlns="http://www.w3.org/1999/xhtml">
<html> 
 <head> 
 <meta  http-equiv="Content-Type" conten="text/html; 
 charset=utf-8"/>
 <link type="text/css" rel="stylesheet" href="estilos.css"/>
</header>
<body>
<div id="principal">
<div id="cabecera">
<img src="imagenes/3.jpg" width="499" heidht="102"/>
<div id="cabederecha">
<p>
 <?
 session_start();
  if(isset($_SESSION['usuario'])){
    echo "Bienvenido:  ".$_SESSION['usuario'];
    ?>
  </p>
  <p><a href="salir.php">cerrar sesion</a></p>
  </div>
  </div>
  <div id="menu">
  <p> Matenimiento de la tabla productos</p>
  </div>
  <div id="cuerpo">
  <?php
  include "conec.php"
  if(isset($_POST['actualizar'])){
    $cod=$_POST['actualiza'];
    $sql="select * from productos where cod_producto ='$cod'";
    $res=mysql_query($sql);
    ?>

      <form id="form1"name="form1" method="post" action="modificar.php">
     <table width="385" border="1">
     <tr>
     <td width="145">CODIGO</td>
     <tr width="224"><label for="textfield" ></label>
     <input type="text" name="textfield" id="textfield"
    readonly="true" vale="<?php echo
    mysql_result($res,0,"cod_producto");?>"/></td>
    </tr>
    <tr>
    <td>NOMBRE</td>
    <td><label for="textfield2"></label>
    <input type="text" name="textfield2" id="textfield2"
    value="<?php echo mysql_result($res,0,"nombre");?>"/></td>
    </tr>
    <tr>
    <td>PRECIO</td>
    <td><label for="textfield3"></label>
    <input type="text" name="textfield3" id="textfield3"
    value="<?php echo mysql_result($res,0,"precio");?>"/></td>
    </tr>
    <tr>
    <td>STOCK</td>
    <td><label for="textfield4"></label>
    <input type="text" name="textfield4" id="textfield4"
    value="<?php echo mysql_result($res,0,"stock");?>"/></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" id="submit"
    value="Guardar"/></td>
   </tr> 
    </table>
    </form>
    <?php
    if(isset($_POST['button']))
  }
$cod1=$_POST['textfield'];
$nom=$_POST['textfield2'];
$pre=$_POST['textfield3'];
$sto=$_POST['textfield4'];

echo $cod1."br";
echo $nom."br";
echo $pre."br";
echo $sto."br";

$sql1="update productos set nombre='$nom',precio='$pre',
stock='$sto' where cod_producto='$cod1'";
$res1=mysql_query($sql1);
if($res1){
  echo "se guardo correctamente";
}
else{
  echo "no se pudo guardar"
}


?>
<p>
<a href="index1.php">Regresar </a>
</p>
<?php
}
  else
{

header("location:index.php");

}
?>
</div>
</body>
</html>






















