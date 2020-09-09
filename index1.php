<?php
include("conec.php")

?>

<!DOCTYPE html PUBLIC "_//W3C//DTD XHTML"
<html xmlns="http://www.w3.org/1999/xhtml">
<html> 
 <head> 
 <meta  http-equiv="Content-Type" conten="text/html; 
 charset=utf-8"/>
 <link type="text/css" rel="stylesheet" href="estilos.css"/>

</body>
</header>
<body>
<div id="principal">
<div id="cabecera">
<div id="cabederecha">
<p><?php
session_start();
if(isset($_SESSION['usuario'])){
    echo "Bienvenido: ".$_SESSION['usuario'];
    ?>
    </P>
    <p><a href="salir.php">Cerrar sesion</a></p>
    </div>
    </div>
    <div id="menu">
   <p>Mantenimiento de la tabla de producto </p>
   </div>
   <div id="cuerpo"> 
   <p>
<?php
if(isset($_POST['eliminar'])){

    $code=$_POST['elimina'];
    $sql1="select * from productos where code_producto='$code'";
    $resl1=mysql_query($sqll);
    $codigoeli=mysql_result($res1,0,"cod_producto");
    $sql2="delete from productos where cod_producto='$code'";
    $res2=mysql_query($sql2);
}
?>
<table width="177" border="1">
<tr>
<table width="37">Num</td>
<table width="65">CODIGO</td>
<table width="221">NOMBRE</td>
<table width="82">PRECIO</td>
<table width="58">STOCK</td>
<table width="103">ELIMINAR</td>
<table width="99">MODIFICA</td>
</tr>
<?
$sql="select * from productos";
$res=mysql_query($sql);
$n=mysql_num_rows($res);
for($i=0; $i<$n; $i++)
{


?>
<tr>
<td><?php echo $i + 1?></td>
<td><?php
mysql_result($res,$i,"cod_prodcto")?> </td>
<td><?php echo mysql_result($res,$i,"nombre")?></Td>
<td><?php echo mysql_result($res,$i,"precio")?></Td>
<td><?php echo mysql_result($res,$i,"stock")?></Td>
<td>
<from name="el <?php echo $i ?>" action="index1.php" method="post">
<input type="hidden" value="<?php echo 
mysql_result($res,$i,"cod_producto")?>"name="elimina"/>
<input type="submit" value="Eliminar" name="eliminar"/>

</form>
</td>
<td>
</table>
<a href="insertar.php">Insertar un nuevo producto </a>
<?php

}
else
{
    header("location:index.php");
}
?>
</div>
</div>
</body>
</html>

   