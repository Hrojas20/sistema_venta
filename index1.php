<?php
include("conec.php")

?>
<!DOCTYPE html>
<html lang="es">
<head>
     <meta charset="utf-8">
	<title>sistema de ventas</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
     <div id="contenedor">
     <header>
        <a href="index.html"><h1>SISTEMA DE VENTAS</h1></a>
     	<div id="redes">
     	      <a href="http://www.facebook.com"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqU_7C34YrhnRjJzZqdE3vTpPU3JCox_akVHFj3IDZATZCf6XuVw" alt="facebook" height="40" width="40"></a>
              <a href="http://www.twitter.com"><img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTJmO5ZLZiAOp83UVxzz6jmAK42BeaWgRWQbMu_wcQLLOdENtQa" alt="twitter" height="60" width="60"></a>
              <a href="http://www.youtube.com"><img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSHWdEteBvqkDTdnKU9FFckUOAvumjRvd6jZw8_2ARajPPvr79F" alt="youtube" height="40" width="40"></a>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="#">INICIO</a></li>
            <li><a href="#">USUARIO</a></li>
            <li><a href="#">PRODUCTO</a></li>
            <li><a href="#">FACTURA</a></li>
            <li><a href="#">CONTACTO</a></li>     
            <li><a href="#">REPORTE</a></li> 
        </ul>
    </nav>

    <section id="banner">
    <body background="imagen/3.jpg" width="940"></body>
    </section>
    <section id="contenido">
        <article class="articulos">
            <h2>articulo 1</h2>
            <img src=imagen/4.jpg>
            <p>Para las personas que son deportistas y dedican a correr, requieren de un tipo de zapatillas con</p>
            <p>determinadas carácterísticas. Esto se debe a que se dedica muchas horas a entrenar, así como se participa </p>
            <p>en muchas competencias, lo que requiere de un excelente calzado.</p>
      </article>
      <tr>
         <article class="articulos">
            <h2>articulo 2</h2>
            <img src=imagen/5.png>
            <p>Para las personas que les gustas vestidos, requieren un vistidos como estas con</p>
            <p>determinadas carácterísticas. </p>
            <p>en muchas compromisos, lo que requiere de un excelente vestido como esta.</p>
        
        </article>

        <tr>
         <article class="articulos">
            <h2>articulo 3</h2>
            <img src=imagen/6.jpg>
            <p>Para las personas que les gustan casacas es un vistimienta  como abrigos con</p>
            <p>determinadas carácterísticas. </p>
            <p>en muchas compromisos, lo que requiere de un excelente vestido como esta.</p>
        
        </article>
        <tr>
         <article class="articulos">
            <h2>articulo 4</h2>
            <img src=imagen/10.jpg>
            <p>Para las personas que les gustas poleras, requieren un poleras como estas con</p>
            <p>determinadas carácterísticas. </p>
            <p>en muchas, requiere de un excelente convnacion como esta.</p>
        
        </article>
     </section>
      <aside>
            <h3>publicidad</h3>
            <p>EL tenemos todo tipo de ropas a precio unico, tenemos el 50% de descuento en prendas de vestir.</p>
            <div id="imgaside"><img src=imagen/7.png></div>
        </aside>
        <tr>
        <aside>
            <h3>En Oferta</h3>
            <p>EL tenemos todo tipo de ropas a precio unico, tenemos el 50% de descuento en prendas de vestir.</p>
            <div id="imgaside"><img src=imagen/11.jpg></div>
        </aside>
        <tr>
        <aside>
            <h3>En Oferta</h3>
            <p>EL tenemos todo tipo de ropas a precio unico, tenemos el 50% de descuento en prendas de vestir.</p>
            <div id="imgaside"><img src=imagen/9.jpg></div>
        </aside>
        <footer>
             <p>&copy; Derechos Reservados: Hilder Rojas</p>
        </footer>
    </div>
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


</body>
</html>

