<?php
function getCategories($conn) {
    $sql = 'SELECT `ID`, `name` FROM `category`';
    $stmt = $conn->query($sql, PDO::FETCH_ASSOC);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getCategoriabyName($conn, $name) {
    $sql = 'SELECT `ID`, `description` FROM `category` WHERE `name` = :nom';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':nom', $name);
    $stmt->execute();
    $prova = $stmt->fetch(PDO::FETCH_ASSOC);
    return $prova;
}

function getCategoriabyID($conn, $id) {
    $sql = 'SELECT `name` FROM `category` WHERE `id` = :id';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $prova = $stmt->fetch(PDO::FETCH_ASSOC);
    return $prova;
}
?>