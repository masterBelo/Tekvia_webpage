<?php
      $mail = $_POST['c'];
       
      if(!empty($mail)) {
            comprobar2($mail);
      }
       
      function comprobar2($c) {
            $con2 = mysql_connect("localhost","c0260330_tkvprb","LUri07geze");
            mysql_select_db('c0260330_tkvprb', $con2);
       
            $sql = mysql_query("SELECT * FROM users WHERE correo = '".$c."'",$con2);
             
            $contar2 = mysql_num_rows($sql);
             
            if($contar2 == 0){
                echo "<span style='font-weight:bold;color:red;'>El correo no se encuentra registrado, vuelva a intentarlo.</span><script>
                    document.getElementById('boton').disabled=true;
                    </script>";
            }else{
                    echo "<script>document.getElementById('boton').disabled=false;</script>";
            }
      }     
?>