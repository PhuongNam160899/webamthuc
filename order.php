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
                   <th class="table-cart">Mã đơn hàng</th>
                   <th class="table-cart">Ngày đặt hàng</th>
                   <th class="table-cart">Tổng tiền</th>
                   <th class="table-cart">Trạng thái</th>
                   <th class="table-cart">Chức năng</th>
               </tr>
           </table>
          <?php
                include 'config.php';
                $use =$_SESSION['use'];
                $sql = "SELECT * FROM donhang WHERE username='$use' ";
                $query = mysqli_query($conn,$sql); 
                if(mysqli_num_rows($query) > 0){
                while($data = mysqli_fetch_assoc($query)){
                 ?>
                   <table class="table-cart_style" >
                       <tr>
                           <th class="table-cart-product"><a href=""><?php echo $data['id'] ?></a></th>
                           <th class="table-cart-product"><?php echo $data['date'] ?></th>
                           <th class="table-cart-product"><p class="number"><?php echo $data['tongtien'] ?></p></th>
                           <th class="table-cart-product"><?php echo $data['trangthai'] ?></th>
                           <th class="table-cart">
                           <a href="ctorder.php?id=<?php echo $data['id'];?>">Xem chi tiết</a>
                           </th>
                       </tr>
                   </table>
            <?php
                }
                }
                else{
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