<?php
		    include("conection.php");

            $nombreInstitucion = $_POST['nombreInstitucion'];
            $rfcInstitucion = $_POST['rfcInstitucion'];
            $direccionInstitucion = $_POST['direccionInstitucion'];
            $noIntInstitucion = $_POST['noIntInstitucion'];
            $noExtInstitucion = $_POST['noExtInstitucion'];
            $cpInstitucion = $_POST['cpInstitucion'];
            $coloniaInstitucion = $_POST['coloniaInstitucion'];
            $estadoInstitucion = $_POST['estadoInstitucion'];
            $municipioInstitucion = $_POST['municipioInstitucion'];
            $nombreRP = $_POST['nombreRP'];
            $direccionRP = $_POST['direccionRP'];
            $curpRP = $_POST['curpRP'];
            $estadoRP = $_POST['estadoRP'];
            $telRP = $_POST['telRP'];
            $coloniaRP = $_POST['coloniaRP'];
            $municipioRP = $_POST['municipioRP'];
            $celRP = $_POST['celRP'];
            $correoRP = $_POST['correoRP'];
            
            $comprobanteInstitucionA = $_FILES['comprobanteInstitucion'];
            $comprobanteInstitucionN = $_FILES['comprobanteInstitucion']['name'];
            $cedulaRfcARA = $_FILES['cedulaRfcAR'];
            $cedulaRfcARN = $_FILES['cedulaRfcAR']['name'];
            $cedulaAutorizacionARA = $_FILES['cedulaAutorizacionAR'];
            $cedulaAutorizacionARN = $_FILES['cedulaAutorizacionAR']['name'];
            $registroARA = $_FILES['registroAR'];
            $registroARN = $_FILES['registroAR']['name'];
            $copiaAcreditaARA = $_FILES['copiaAcreditaAR'];
            $copiaAcreditaARN = $_FILES['copiaAcreditaAR']['name'];
            $copiaRPARA = $_FILES['copiaRPAR'];
            $copiaRPARN = $_FILES['copiaRPAR']['name'];
            $cartaMembretadaARA = $_FILES['cartaMembretadaAR'];
            $cartaMembretadaARN = $_FILES['cartaMembretadaAR']['name'];
            $cartaPoderARA = $_FILES['cartaPoderAR'];
            $cartaPoderARN = $_FILES['cartaPoderAR']['name'];
             

            
            $destino1 = "archivos/".$comprobanteInstitucionN;
            copy($_FILES['comprobanteInstitucion']['tmp_name'],$destino1);

            $destino2 = "archivos/".$cedulaRfcARN;
            copy($_FILES['cedulaRfcAR']['tmp_name'],$destino2);

            $destino3 = "archivos/".$cedulaAutorizacionARN;
            copy($_FILES['cedulaAutorizacionAR']['tmp_name'],$destino3);

            $destino4 = "archivos/".$registroARN;
            copy($_FILES['registroAR']['tmp_name'],$destino4);

            $destino5 = "archivos/".$copiaAcreditaARN;
            copy($_FILES['copiaAcreditaAR']['tmp_name'],$destino5);

            $destino6 = "archivos/".$copiaRPARN;
            copy($_FILES['copiaRPAR']['tmp_name'],$destino6);

            $destino7 = "archivos/".$cartaMembretadaARN;
            copy($_FILES['cartaMembretadaAR']['tmp_name'],$destino7);

            $destino8 = "archivos/".$cartaPoderARN;
            copy($_FILES['cartaPoderAR']['tmp_name'],$destino8);

            

			
			$insertar0 = "insert into formularioedu(nombreInstitucion, rfcInstitucion, direccionInstitucion, noIntInstitucion, noExtInstitucion, cpInstitucion, coloniaInstitucion, estadoInstitucion, municipioInstitucion, comprobanteInstitucion, nombreRP, direccionRP, curpRP, estadoRP, telRP, coloniaRP, municipioRP, celRP, correoRP, cedulaRfcAR, cedulaAutorizacionAR, registroAR, copiaAcreditaAR, copiaRPAR, cartaMembretadaAR, cartaPoderAR) values('$nombreInstitucion', '$rfcInstitucion', '$direccionInstitucion', '$noIntInstitucion', '$noExtInstitucion', '$cpInstitucion', '$coloniaInstitucion', '$estadoInstitucion', '$municipioInstitucion', '$destino1', '$nombreRP', '$direccionRP', '$curpRP', '$estadoRP', '$telRP', '$coloniaRP', '$municipioRP', '$celRP', '$correoRP', '$destino2', '$destino3', '$destino4', '$destino5', '$destino6', '$destino7', '$destino8')";
                    mysqli_query($conexion,$insertar0);
                    echo mysqli_error(conexion);

           
		?>