<?php
require_once 'dbkoneksi.php';

    $iddel = $_GET['iddel'];
    $query = "DELETE FROM pesanan WHERE id = ?";
    $delete = $dbh->prepare($query);
    $delete->execute([$iddel]);

    header('location:list_pesanan.php');
?>