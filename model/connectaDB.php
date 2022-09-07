<?php
    function connectaBD() {
        $servidor = "127.0.0.1";
        $usuari = "tdiw-m4";
        $pass = "uJoaGoxP";
        try {
            $connexio = new PDO("mysql:host=$servidor;dbname=tdiwm4;charset=utf8mb4", $usuari, $pass);
            $connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return($connexio);
    }

?>