<?php
include 'config.php';
if (isset($_POST["submit"]) && $_POST["usename"] != '' && $_POST["password"] != '' && $_POST["repassword"] != '' && $_POST["sdt"] != '' && $_POST["gmail"] != '' && $_POST["diachi"] != '') {
    $username = $_POST["usename"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $sdt = $_POST["sdt"];
    $gmail = $_POST["gmail"];
    $diachi = $_POST["diachi"];
    if($password != $repassword)
    {
        header("location:register.php");
    }
    else{
        $sql = "SELECT * FROM user WHERE username = '$username'";
        $kt = mysqli_query($conn, $sql);
        //$data = mysqli_fetch_assoc($user);
        if (mysqli_num_rows($kt) > 0) {
            header("location:register.php");
        } 
        else {
            $password =md5($password);
            $sql = "INSERT INTO user(username,password,sdt,Diachi,gmail) VALUES ('$username','$password','$sdt',N'$diachi','$gmail')";
            $test = mysqli_query($conn, $sql);
            $ab = mysqli_num_rows($test);
            header("location:login.php");
        }
    }  
}else {
    header("location:register.php");
    //header("location:index.php");
} 
?>