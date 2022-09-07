<?php
require_once __DIR__ . '/../model/connectaDB.php';
$conn = connectaBD();
require_once __DIR__ . '/../model/categories.php';
$categories = getCategories($conn);
require  __DIR__ . '/../view/mostraHistory.php';
?>