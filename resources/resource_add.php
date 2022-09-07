<!DOCTYPE html>
<html>
<?php include __DIR__ . "/../controller/head.php"; ?>
<body>

<?php
$itemid = (isset($_GET['product_id']) ? $_GET['product_id'] : null);
switch ($itemid) {
    case $itemid != 'null':
        include __DIR__ . "/../controller/addProduct.php";
        break;
}
require __DIR__ . '/../view/mostraCarroNavVar.php';
?>
</body>
</html>