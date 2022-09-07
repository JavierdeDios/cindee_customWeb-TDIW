<?php
function getProducts($conn, $id) {
    $sql = 'SELECT * FROM `products` WHERE `category_id`= :catid ';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':catid', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProductsByName($conn, $name) {
    $sql = 'SELECT * FROM `products` WHERE `name`= :nom ';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':nom', $name);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getByID($conn, $id) {
    $sql = 'SELECT * FROM `products` WHERE `id`= :id ';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>