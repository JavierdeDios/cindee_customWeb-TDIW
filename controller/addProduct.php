<?php
if (isset($_GET['product_id'])){
    if(array_key_exists($_GET['product_id'], $_SESSION['carro'])) {
        $_SESSION['carro'][$_GET['product_id']] = $_SESSION['carro'][$_GET['product_id']] + 1;
    } else {
        $_SESSION['carro'][$_GET['product_id']] = 1;
    }
}
?>
