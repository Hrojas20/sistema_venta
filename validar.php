<?php
  if(isset($_GET['us'])){
    $usum=$_GET['us'];
    if($usum=="usuarioincorrecto"){

    }
    ?>
  <p> <font color="#FF0000"> <? echo "usuario no existe";?>
  </font>
  </p>
  <?php
   }
  if($usum =="contraseñaincorrecta")
  {

  
  ?>
  <p>
  <font color="#FF0000"> <? echo "la contraseña no conrresponde"; ?> </font>
  </p>
