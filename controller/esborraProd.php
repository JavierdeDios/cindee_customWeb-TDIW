<?php
if (isset($_GET['product_id'])){
    if(array_key_exists($_GET['product_id'], $_SESSION['carro'])) {
        unset($_SESSION['carro'][$_GET['product_id']]);
    }
}
include __DIR__ . "/../model/redirect.php";
$k = redirect('http://tdiw-m4.deic-docencia.uab.cat/index.php?action=cart');
?>

