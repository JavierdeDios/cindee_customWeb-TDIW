<?php
require_once __DIR__ . '/../model/connectaDB.php';
$conn = connectaBD();
include_once __DIR__ . '/../model/users.php';

$actualitzat = actdades($conn, $_SESSION['user_id']);
if ($actualitzat) {
    $dades = getdadesbyid($conn, $_SESSION['user_id']);
    $_SESSION['user_name'] = $dades['name'];
    $_SESSION['user_mail'] = $dades['mail'];
    $_SESSION['user_address'] = $dades['address'];
    $_SESSION['user_city'] = $dades['city'];
    $_SESSION['user_pcode'] = $dades['postal_code'];
}
include __DIR__ . "/../model/redirect.php";
$k = redirect('http://tdiw-m4.deic-docencia.uab.cat/index.php');
?>

