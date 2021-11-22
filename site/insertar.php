<?php
include 'conexion.php';

$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Usuario=$_POST['Usuario'];
$Email=$_POST['Email'];
$Contrasena=$_POST['Contrasena'];

$resIns=mysqli_query($conexion, ("INSERT INTO usuarios(Nombre, Apellido, Usuario, Email, Contrasena)
VALUES ('$Nombre','$Apellido','$Usuario','$Email','$Contrasena')"));
if($resIns){
  echo " <script> alert ('Datos enviados exitosamente, apartir de este moemento usted cuenta con 24 horas para depositar al numero de cuenta: 5204-1656-1355-2094 y enviar el recibo al correo: info@casarogelhospedaje.mx'); 
  location.href = '../Index.php';
    </script>";
  }else{
      echo " <script> alert('Error al enviar los datos');
      location.href = '../index.php';
       </script>";
  }

?>