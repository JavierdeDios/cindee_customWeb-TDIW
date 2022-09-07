<?php
require_once __DIR__ . '/../model/connectaDB.php';
$conn = connectaBD();
require_once __DIR__ . '/../model/products.php';
foreach($_SESSION['carro'] as $x => $x_value) {
    $data = getByID($conn, $x);
    $nom = ucwords(str_replace("_", " ", $data['name']));?>
    <a><?php echo $nom.' x '.$x_value;  ?></a>
<?php }
?>

