<!--Sistema Realizado por: Dilson Joan Porras Ramones
    C.I: 27.675.077
    Carrera: Ing. Sistemas
    Semestre: 6to-->
<?php
$mysqli=new mysqli('localhost','root','','bicentconsejo');
if ($mysqli->connect_errno) {
  echo "Error al conectarse con My SQL debido al error".$mysqli->connect_error;
}
 ?>
