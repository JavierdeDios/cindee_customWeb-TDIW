<?php
session_destroy();
include __DIR__ . "/../model/redirect.php";
$k = redirect('http://tdiw-m4.deic-docencia.uab.cat/index.php');
?>