<?php
include("conec.php")

?>
<!DOCTYPE>
<head>


  <meta charset="utf-8">
  <title>Nuestro primer proyecto en php, css y javaScript</title> 
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
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</head>
<h1><font color="red"><p  id="titulo">SISTEMA DE VENTAS </p></font></h1>

  <body background="imagen/2.jpg"></body>

<body>

    <div class="container formulario">

<br>
<br>
   <center> 
 <form action="validar.php" method="post">
 <div class="form-group">
<img src="imagen/11.jpg" border="1"  width="88" height="150">
<td label  for="usuario"> <h3><font color="red"><p>Usuario</h3></label></td></p>
<div class="col-xs-10 col-xs-offset-1">
  <input type="text" name="mail" class="form-control Input" required placeholder="">
 </div>
 </div>
<div class="form-group">
<img src="imagen/1.jpg" border="1"  width="150" height="90">
<label class="col-xs-12" for="password"td bgcolor="#00FF99"><h3>Contraseña</h3></label>
<div class="col-xs-10 col-xs-offset-1">
<input type="password" name="pass" class="form-control col-xs-12 Input" required placeholder="">
</div>
</div>
<div class="form-group">
 <button type="submit" ame="submit" class="btn btn-success center-block btn-lg">Ingresar</button>
 <button type="submit" class="btn btn-muted center-block btn-lg"><a href="registro.php">Registrar</a></button>
 <button type="reset" class="btn btn-danger center-block btn-lg">Limpiar</button>
 </div>
</form>
</center>
</div>
</body>
</html>