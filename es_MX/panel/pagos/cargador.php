<?php
require('../../assets/Openpay/Openpay.php');
$openpay = Openpay::getInstance('m33buy77sbo9rixxi44d',
  'sk_038e73f0224e41eda1733bd62c6d18ba');

$customer = array(
     'name' => $_POST["name"],
     'last_name' => $_POST["last_name"],
     'phone_number' => $_POST["phone_number"],
     'email' => $_POST["email"],);

$chargeData = array(
    'method' => 'card',
    'source_id' => $_POST["token_id"],
    'amount' => (float)$_POST["amount"],
    'description' => $_POST["description"],
    'device_session_id' => $_POST["deviceIdHiddenFieldName"],
    'customer' => $customer
    );
try{
    $charge = $openpay->charges->create($chargeData);
    echo true;
}catch(Exception $e){
  $arrayObjeto = (array)$e;
  $array1 = $arrayObjeto["\0Exception\0trace"];
  $array2 = $array1[0];
  $array3 = $array2['args'];
  $ArrayJson = $array3[0];
  $objetoJson = json_decode($ArrayJson);
  echo $objetoJson->error_code;
}
?>
