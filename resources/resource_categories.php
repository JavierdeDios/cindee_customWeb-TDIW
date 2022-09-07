<!DOCTYPE html>
<html>
    <?php include __DIR__ . "/../controller/head.php"; ?>
</html>
<body>
    <?php
    $it = (isset($_GET['item']) ? $_GET['item'] : null);
    switch ($it) {
        case $it != 'null':
            include __DIR__ . '/../controller/item.php';
            break;

        default:
            include __DIR__ . "/../controller/llistaCategories.php";
            break;
    }
    ?>
</body>
