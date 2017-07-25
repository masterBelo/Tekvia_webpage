<html>
    <head>
    </head>
<body>
    <div class="fondo">
<img src="../../resources/loadingtekvia.gif">
    </div>
    <style>
        .fondo{
            display: flex;
            display: -webkit-flex;
            display: -moz-flex;
            align-items: center;
            -webkit-align-items: center;
            -moz-align-items: center;
            justify-content: center;
            -webkit-justify-content: center;
            -moz-justify-content: center;
        }
    </style>
</body>
</html> 		   

<?php
		    include("conection.php");
            $correo = $_POST['correo'];

			$insertar1 = "select * from users where correo = '$correo'";
            $consulta=mysqli_query($conexion,$insertar1);

              
            while ($row=mysqli_fetch_array($consulta)) {
           
              $nombre=$row['nombre'];
              $usuario=$row['usuario'];
              $contrasenia=$row['contrasenia'];
              $tekvia=$row['tekvia'];    
             
             
              }
		?>

<?php 


ini_set('display_errors',1);
require("phpmailerlibs/class.phpmailer.php");
require("phpmailerlibs/class.smtp.php");

$mail = new PHPMailer(); 
$mail->IsSMTP(); 
$mail->SMTPAuth = true; 
$mail->SMTPSecure = "ssl"; 
$mail->Host = "smtp.gmail.com"; 
$mail->Port = 465; 
$mail->Username = "tekviaprogramacion@gmail.com"; 
$mail->Password = "tekvia123";


$mail->From = "Tekvia"; 
$mail->FromName = "Tekvia"; 
$mail->Subject = "Recuperacion de cuenta Tekvia"; 
$mail->AltBody = "Recuperacion de cuenta Tekvia"; 
$mail->MsgHTML("Hola <b>$nombre</b> Recientemente hiciste una peticion para recuperar tu cuenta Tekvia <br>Tus datos de acceso son los siguientes:<br>
<b>Usuario:</b> $usuario<br><b>Contrasena:</b> $contrasenia <br> <br> Si tu no hiciste esta peticion ignora el mensaje. <br> <br><img src='http://c0260330.ferozo.com/tekviaErik/images/tekviacloud.png'><br> <b>Equipo de Tekvia</b>"); 
$mail->AddReplyTo("$correo");
$mail->AddAddress("$correo"); 
$mail->IsHTML(true); 
if(!$mail->Send()) { 
echo "Error: " . $mail->ErrorInfo; 
} else { 
    echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../listocorreo.html'/>";
}  
   
?>

