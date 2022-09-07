<?php
if (isset($_GET['product_id'])){
    if(array_key_exists($_GET['product_id'], $_SESSION['carro'])) {
        if (isset($_GET['operacio'])) {
            if ($_GET['operacio'] == 'afegir') {
                $_SESSION['carro'][$_GET['product_id']] = $_SESSION['carro'][$_GET['product_id']] + 1;
            }
            if ($_GET['operacio'] == 'treure') {
                if ($_SESSION['carro'][$_GET['product_id']] == 1) {
                    unset($_SESSION['carro'][$_GET['product_id']]);
                } else {
                    $_SESSION['carro'][$_GET['product_id']] = $_SESSION['carro'][$_GET['product_id']] - 1;
                }
            }
        }
    }
}
include __DIR__ . "/../model/redirect.php";
$k = redirect('http://tdiw-m4.deic-docencia.uab.cat/index.php?action=cart');
?>
