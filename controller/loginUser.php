<?php
    require_once __DIR__ . '/../model/connectaDB.php';
    $conn = connectaBD();
    include_once __DIR__ . '/../model/users.php';
    if (login($conn)) {
        $dades = getdades($conn);
        $_SESSION['user_id'] = $dades['ID'];
        if (!isset($_SESSION['user_nom'])) {
            $_SESSION['user_name'] = $dades['name'];
        }
        if (!isset($_SESSION['user_mail'])) {
            $_SESSION['user_mail'] = $dades['mail'];
        }
        if (!isset($_SESSION['user_address'])) {
            $_SESSION['user_address'] = $dades['address'];
        }
        if (!isset($_SESSION['user_city'])) {
            $_SESSION['user_city'] = $dades['city'];
        }
        if (!isset($_SESSION['user_pcode'])) {
            $_SESSION['user_pcode'] = $dades['postal_code'];
        }
        if (!isset($_SESSION['carro'])) {
            $_SESSION['carro'] = array("1"=>"3", "2"=>"1", "5"=>"2");
        }
        if (!isset($_SESSION['profile_picture'])) {
            $_SESSION['profile_picture'] = $dades['profile_picture'];
        }
        include __DIR__ . "/../model/redirect.php";
        $k = redirect('http://tdiw-m4.deic-docencia.uab.cat/index.php');
    } else {
        include __DIR__ . "/../model/redirect.php";
        $k = redirect('http://tdiw-m4.deic-docencia.uab.cat/index.php?action=login');
    }
    ?>