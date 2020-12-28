<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>WEBAMTHUC</title>
    <link href="Demo.css" rel="stylesheet" />
    <script type="text/javascript" src="jquery/jquery.js"></script>
    <script type="text/javascript" src="jq.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="header">
        <?php include'header.php'?>
    </div>
    <div class="body">
       <div class="body-cart">
           <table>
               <tr>
                   <th class="table-cart">Sản phẩm</th>
                   <th class="table-cart">Tên sản phẩm</th>
                   <th class="table-cart">Số lượng</th>
                   <th class="table-cart">Giá</th>
                   <th class="table-cart">Thành tiền</th>
                   <th class="table-cart">Chức năng</th>
               </tr>
           </table>
           <?php
           if(isset($_SESSION['cart']))
           {
                $Tong = 0;
            foreach ($_SESSION['cart'] as $value) {        
                $Tong = $Tong + $value['money'];
                //echo $Tong;
                ?>
                <table class="table-cart_style" >
               <tr>
                   <th class="table-cart-product"><img src="image/<?php echo $value['product_img'] ?>"></th>
                   <th class="table-cart-product"><a href="inforproduct.php?id=<?php echo $value['id-product'];?>"><?php echo $value['title'] ?></a></th>
                   <th class="table-cart-product"><?php echo $value['quantity'] ?></th>
                   <th class="table-cart-product"><p class="number"><?php echo $value['price'] ?></p></th>
                   <th class="table-cart-product"><p class="number"><?php echo $value['money'] ?></p></th>
                   <th class="table-cart">
                    <form action="cart_del.php" method="POST">
                        <input type="submit" name="cart_del" class="cart_del" value="xoá">
                        <input type="text" name="cart_del_id" class="cart_del_id" value="<?php echo $value['id-product'];?>">
                    </form>
                   </th>
               </tr>
           </table>
            <?php
        }?>
        <div class="cart-money"><b>Tổng tiền :</b><p class="number"><?php echo $Tong ?></p></div> 
        <form action="order_submit.php" method="POST">
            <div class="cart-order">
                <input type="submit" name="order_submit" value="Đặt hàng">
                <input type="hidden" name="thanhtien" value="<?php echo $Tong ?>">
            </div>
        </form>   
           <?php
       }
           else{
            ?>
            <table>
               <tr>
                   <th class="table-cart"><p>Giỏ hàng trống</p></th>
               </tr>
           </table>
            
        <?php
    }
        ?>
           
       </div>
    </div>
    <div class="footer"></div>
<script>
        $(".cart_del").on("click", null, function(){
           return confirm("Bạn chắc chắn muốn xóa?");
       });
    </script>
</body>

</html>