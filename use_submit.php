<?php
include 'config.php';
session_start();
if (isset($_POST["save"])) {
    $hoten = $_POST["hoten"];
    $sdt = $_POST["sdt"];
    $gmail = $_POST["gmail"];
    $diachi = $_POST["diachi"];
    $username = $_SESSION['use'];
    $sql = "UPDATE user SET hoten = N'$hoten' , sdt='$sdt',Diachi=N'$diachi',gmaIL='$gmail' WHERE username = '$username'";
    $save = mysqli_query($conn, $sql);
    header("location:use.php"); 
} elseif(isset($_POST["logout"])) {
    unset($_SESSION['use']);
    unset($_SESSION['cart']);
    header("location:login.php");
}
else{

} 
?>