<?php
require('../../assets/Openpay/Openpay.php');
$openpay = Openpay::getInstance('m33buy77sbo9rixxi44d',
  'sk_038e73f0224e41eda1733bd62c6d18ba');

$chargeData = array(
    'method' => 'store',
    'amount' => $_POST['amount'],
    'description' => 'Cargo a tienda');

$charge = $openpay->charges->create($chargeData);
?>
