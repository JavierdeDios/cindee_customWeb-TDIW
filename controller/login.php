<?php
require_once __DIR__ . '/../model/connectaDB.php';
$conn = connectaBD();
require_once __DIR__ . '/../model/categories.php';
$categories = getCategories($conn);
#BBDD
require  __DIR__ . '/../view/mostraFotoHeader.php';
require  __DIR__ . '/../view/mostraLoginUser.php';

?>