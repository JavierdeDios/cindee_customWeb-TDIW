<?php
    require_once __DIR__ . '/../model/connectaDB.php';
    $conn = connectaBD();
    include_once __DIR__ . '/../model/users.php';
    if (registra($conn)) {
        require_once __DIR__ . "/../model/redirect.php";
        $k = redirect('http://tdiw-m4.deic-docencia.uab.cat/index.php');
    } else {
        require_once __DIR__ . "/../model/redirect.php";
        $k = redirect('http://tdiw-m4.deic-docencia.uab.cat/index.php?action=register');
    }
    ?>