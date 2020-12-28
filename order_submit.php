<?php
    include 'config.php';
    session_start();
    $use = $_SESSION['use'];
    $tongtien = $_POST['thanhtien'];
    //echo $use;
    //echo $tongtien;
    $date = date('Y-m-d');
    $sql="INSERT INTO donhang(username,tongtien,trangthai,date) VALUES ('$use','$tongtien','Chờ xác nhận','$date')"; 
   	$query_s= mysqli_query($conn,$sql);
    $id = mysqli_insert_id($conn);
    foreach ($_SESSION['cart'] as $value) { 
    	// echo $value['id-product'];
    	// echo $value['quantity'];
    	// echo $value['price'];
    	// echo $value['money'];
    	// echo "--------";
    	$idsp = $value['id-product'];
    	$soluong = $value['quantity'];
    	$gia = $value['price'];
    	$tt = $value['money'];

    	$sql1="INSERT INTO ctdonhang(iddh,idsp,soluong,gia,thanhtien) VALUES ('$id','$idsp','$soluong','$gia','$tt')"; 
   		$query_s1= mysqli_query($conn,$sql1);
    }
    unset($_SESSION['cart']);
    header("location:cart.php");      
?>