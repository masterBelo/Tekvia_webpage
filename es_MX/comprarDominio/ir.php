<html>
    <head>
<?php
session_start();
    $dominio = $_POST['dns'];
  include('conection.php');
  if(isset($_SESSION['ide'])){
    $ident =   $_SESSION['ide'];
    $usuario = $_SESSION['nombre'];
    $insertar0 = "insert into dominios(dns_dominio, precio) values('$dominio', '299')";
    mysqli_query($conexion,$insertar0);
      
    $insertar1 = "select * from dominios order by id_dominio DESC LIMIT 1";
    $consulta=mysqli_query($conexion,$insertar1);
    while ($row=mysqli_fetch_array($consulta)) {
    $id_dominio=$row['id_dominio'];
}  
    $insertar2 = "insert into carrito(id_usuario, id_servicio, tipo_servicio) values('$ident', '$id_dominio', '2')";
    mysqli_query($conexion,$insertar2);
      
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=http://c0260330.ferozo.com/TekviaV2/panel/'";  
       
  }else{
      $adv = 5;
      echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=http://c0260330.ferozo.com/TekviaV2/login/?adv=$adv'";
  }
?>
    </head>
</html>