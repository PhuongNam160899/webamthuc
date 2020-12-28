<?php
    include 'config.php';
    session_start();
    $number = $_POST['cart_number'];
    $id = $_SESSION['product_id'];
    $use = $_SESSION['use'];
    if($use != "")
    {
        if(isset($_SESSION['cart'][$id]))
        {  
           //  echo "---hết--";           
           $_SESSION['cart'][$id]['quantity']= $_SESSION['cart'][$id]['quantity']+$number;
           $_SESSION['cart'][$id]['money'] =$_SESSION['cart'][$id]['quantity']*$_SESSION['cart'][$id]['price'];
            header("location:cart.php");
           //  foreach ($_SESSION['cart'] as $key => $value) {
           //      foreach ($value as $k => $v) {
           //          echo $v['title'];
           //      }
           //      //$tien = $value['price']*$value['quantity'];
           //     //echo $value['money'];
           //      // echo $tien;
           //      // echo "-------";
           //      // echo $value['quantity'];
           //      // echo "-------";
           //      // echo $key;
           //      // echo "---hết--";
           //      //echo $value[];
           //  }
            //unset($_SESSION['cart']);
        }else
        {            
            $sql_s="SELECT * FROM product WHERE id=$id"; 
            $query_s=mysqli_query($conn,$sql_s); 
            if(mysqli_num_rows($query_s)!=0){ 
                $row_s=mysqli_fetch_array($query_s); 
                $_SESSION['cart'][$id] = array
                (
                    "id-product"=> $id,
                    "product_img" =>$row_s['product_img'],
                    "title"=>$row_s['title'],
                    "quantity" => $number, 
                    "price" => $row_s['price'],
                    "money" =>$number*$row_s['price'], 
                );
            
                header("location:cart.php");
                }else
                { 
                    $message="This product id it's invalid!"; 
                }                 
        } 
    }
    else
    {
        header("location:login.php");
    }
?>