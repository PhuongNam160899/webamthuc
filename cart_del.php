<?php
    include 'config.php';
    session_start();
    $id = $_POST['cart_del_id'];
    unset($_SESSION['cart'][$id]);
    header("location:cart.php");
?>