<?php
require_once __DIR__ . '/../model/connectaDB.php';
$conn = connectaBD();
include_once __DIR__ . '/../model/users.php';

$actualitzat = actfoto($conn, $_SESSION['user_id']);
if ($actualitzat) {
    $dades = getdadesbyid($conn, $_SESSION['user_id']);
    $_SESSION['profile_picture'] = $dades['profile_picture'];
}
include __DIR__ . "/../model/redirect.php";
$k = redirect('http://tdiw-m4.deic-docencia.uab.cat/index.php');
?>