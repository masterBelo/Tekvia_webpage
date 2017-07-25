<?php
      $user = $_POST['b'];
       
      if(!empty($user)) {
            comprobar($user);
      }
       
      function comprobar($b) {
            $con = mysql_connect("localhost","c0260330_tkvprb","LUri07geze");
            mysql_select_db('c0260330_tkvprb', $con);
       
            $sql = mysql_query("SELECT * FROM users WHERE usuario = '".$b."'",$con);
             
            $contar = mysql_num_rows($sql);
             
            if($contar == 0){
                  echo "<span style='font-weight:bold;color:green;'>Disponible.</span><script>document.getElementById('boton').disabled=false;</script>";
            }else{
                  echo "<span style='font-weight:bold;color:red;'>El nombre de usuario ya existe.</span><script>
document.getElementById('boton').disabled=true;
</script>";
            }
      }     
?>
