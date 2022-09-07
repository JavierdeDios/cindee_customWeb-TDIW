<?php
require_once __DIR__ . '/../model/connectaDB.php';
$conn = connectaBD();
require_once __DIR__ . '/../model/categories.php';
$categories = getCategories($conn);
require_once __DIR__.'/../model/comanda.php';
require_once __DIR__ . '/../model/products.php';
$nitems = 0;
$preutot = 0;
foreach($_SESSION['carro'] as $x => $x_value) {
    $data = getByID($conn, $x);
    $preu = $data['price'] * $x_value;
    $preutot = $preutot + $preu;
    $nitems = $nitems + $x_value;
}
$commandid = afegirComanda($conn, $nitems, $_SESSION['user_id'], $preutot);
$iitems = afegirItemsComanda($conn, $_SESSION['carro'], $commandid);
$_SESSION['carro'] = array();
require __DIR__ . '/../view/mostraPurchase.php';
?>