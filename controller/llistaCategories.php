<?php
    #require __DIR__.'/../view/mostraCategories.php';
    $categoryname = (isset($_GET['categoria_id']) ? $_GET['categoria_id'] : null);
    require_once __DIR__ . '/../model/connectaDB.php';
    $conn = connectaBD();
    require_once __DIR__ . '/../model/categories.php';
    require_once __DIR__ . '/../model/products.php';
    $idcat = getCategoriabyName($conn, $categoryname);
    $items = getProducts($conn, $idcat['ID']);
    $categories = getCategories($conn);
    $cdiv = '-container';
    $c = $categoryname.$cdiv; #shampoo-container
    $divimg = "cat ";
    require  __DIR__ . '/../view/mostraFotoHeader.php';
    require __DIR__ . '/../view/mostraCategories.php';

?>

