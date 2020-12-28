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
      <div class="order-use">
        <?php
                include 'config.php';
                $id = $_GET['id'];
                $use = $_SESSION['use'];
                $sql = "SELECT * FROM user,donhang WHERE donhang.username = user.username AND user.username='$use' AND donhang.id =$id";
                $query = mysqli_query($conn,$sql);
                if(mysqli_num_rows($query) > 0){
                while($data = mysqli_fetch_assoc($query)){
                 ?>
                  <div class="order-use_title"><p>Địa chỉ nhận hàng</p></div>
                  <div class="order-use_use"><b>Họ và tên:</b><p><?php echo $data['hoten'] ?></p></div>
                  <div class="order-use_use"><b>Số điện thoại:</b><p><?php echo $data['sdt'] ?></p></div>
                  <div class="order-use_use"><b>Địa chỉ:</b><p><?php echo $data['diachi'] ?></p></div>
                  <div class="order-trangthai"><b>Trạng thái đơn hàng:</b><p><?php echo $data['trangthai'] ?></p></div>
                <?php
              } 
              }
                else
                {
                  ?>
                  <table>
               <tr>
                   <th class="table-cart"><p>Đơn hàng trống</p></th>
               </tr>
                </table>
                <?php
                }
                ?>
      </div>
       <div class="body-ctorder">
           <table>
               <tr>
                   <th class="table-cart">Sản phẩm</th>
                   <th class="table-cart">Tên sản phẩm</th>
                   <th class="table-cart">Số lượng</th>
                   <th class="table-cart">Giá</th>
                   <th class="table-cart">Thành tiền</th>
               </tr>
           </table>
          <?php
                include 'config.php';
                $id = $_GET['id'];
                $sql = "SELECT * FROM ctdonhang,product,donhang WHERE ctdonhang.iddh=donhang.id AND ctdonhang.idsp = product.id AND ctdonhang.iddh =$id";
                $query = mysqli_query($conn,$sql);
                $Tong = 0; 
                if(mysqli_num_rows($query) > 0){
                while($data = mysqli_fetch_assoc($query)){
                  $Tong = $Tong + $data['thanhtien'];
                 ?>
                   <table class="table-cart_style" >
               <tr>
                   <th class="table-cart-product"><img src="image/<?php echo $data['product_img'] ?>"></th>
                   <th class="table-cart-product"><a href=""><?php echo $data['title'] ?></a></th>
                   <th class="table-cart-product"><?php echo $data['soluong'] ?></th>
                   <th class="table-cart-product"><p class="number"><?php echo $data['price'] ?></p></th>
                   <th class="table-cart-product"><p class="number"><?php echo $data['thanhtien'] ?></p></th>
               </tr>
           </table> 
            <?php
                }?>
                <div class="order-money"><b>Tổng tiền :</b><p class="number"><?php echo $Tong ?></p></div>
                <?php
              }
                else
                {
                  ?>
                  <table>
               <tr>
                   <th class="table-cart"><p>Đơn hàng trống</p></th>
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