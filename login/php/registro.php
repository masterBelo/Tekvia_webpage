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
        require('../../assets/Openpay/Openpay.php');
        $openpay = Openpay::getInstance('m33buy77sbo9rixxi44d',
          'sk_038e73f0224e41eda1733bd62c6d18ba');

            $nombre1 = $_POST['nombre1'];
            $nombre2 = $_POST['nombre2'];
            $usuario = $_POST['usuario'];
            $correo = $_POST['correo'];
            $password = $_POST['password'];
            $correos = $_POST['correos'];


			$insertar0 = "insert into users(usuario,nombre,correo,contrasenia,newsletter,tekvia) values('$usuario', '$nombre1 $nombre2', '$correo', '$password', '$correos', 'on')";
                    mysqli_query($conexion,$insertar0);
                    echo mysqli_error(conexion);

            $insertar1 = "select * from users where usuario = '$usuario'";
            $consulta=mysqli_query($conexion,$insertar1);


            while ($row=mysqli_fetch_array($consulta)) {

              $id=$row['id'];
            }

            $customerData = array(
               'external_id' => $id,
               'name' => $nombre1,
               'last_name' => $nombre2,
               'email' => $correo,
               'requires_account' => false
             );
             $customer = $openpay->customers->add($customerData);
             $customerObject = json_decode($costumer);
             $insertar = "INSERT INTO info_usuario (id_usuario,id_pago) values('$id','$customerObject->id')";
             $consulta=mysqli_query($conexion,$insertar);
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
$mail->Subject = "Bienvenido a Tekvia";
$mail->AltBody = "Tekvia te da la Bienvenida";
$mail->MsgHTML("Hola <b>$nombre1 $nombre2</b> Bienvenido a Tekvia <br>Tus datos de acceso son los siguientes:<br>
<b>Usuario:</b> $usuario<br><b>Contrasena:</b> $password <br> <br><img src='http://c0260330.ferozo.com/tekviaErik/images/tekviacloud.png'><br> <b>Equipo de Tekvia</b>");
$mail->AddReplyTo("$correo");
$mail->AddAddress("$correo");
$mail->IsHTML(true);
if(!$mail->Send()) {
echo "Error: " . $mail->ErrorInfo;
} else {
     session_start();
                $_SESSION['ide'] = $id;
                 echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../listoregistro.html'/>";

}

?>
