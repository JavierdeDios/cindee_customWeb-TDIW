<?php
$nomitem = $_GET['item'];
require_once __DIR__ . '/../model/connectaDB.php';
$conn = connectaBD();
require_once __DIR__ . '/../model/products.php';
$nitem = getProductsByName($conn, $nomitem);
require_once __DIR__ .'/../model/categories.php';
$categories = getCategories($conn);
$nomcategoria = getCategoriabyID($conn, $nitem['category_id'])['name'];
require __DIR__ . '/../view/mostraItem.php';
?>

