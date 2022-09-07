<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = 0;
}
if (!isset($_SESSION['carro'])) {
    $_SESSION['carro'] = array();
}

$accio = (isset($_GET['action']) ? $_GET['action'] : null);
echo '<script>console.log("controlador arribat")</script>';

switch ($accio) {
    case 'register':
        include __DIR__.'/resources/resource_register.php';
        break;
    case 'login':
        include __DIR__.'/resources/resource_login.php';
        break;
    case 'logout':
        include __DIR__.'/resources/resource_logout.php';
        break;
    case 'logged':
        include __DIR__.'/resources/resource_logged.php';
        break;
    case 'categories':
        include __DIR__ .'/resources/resource_categories.php';
        break;
    case 'profile':
        include __DIR__.'/resources/resource_profile.php';
        break;
    case 'mod':
        include __DIR__.'/resources/resource_mod_perf.php';
        break;
    case 'cart':
        include __DIR__.'/resources/resource_cart.php';
        break;
    case 'empty':
        include __DIR__.'/resources/resource_empty.php';
        break;
    case 'checkout':
        include __DIR__.'/resources/resource_checkout.php';
        break;
    case 'history':
        include __DIR__.'/resources/resource_history.php';
        break;
    case 'modpicture':
        include __DIR__.'/resources/resource_modPicture.php';
        break;
    case 'add':
        include __DIR__.'/resources/resource_add.php';
        break;
    case 'modificaCart':
        include __DIR__.'/resources/resource_modCart.php';
        break;
    case 'esborraprod':
        include __DIR__.'/resources/resource_esborraprod.php';
        break;
    default:
        include __DIR__.'/resources/resource_home.php';
        break;
}
?>


