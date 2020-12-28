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
        <?php
                include 'config.php';
                $id = $_GET['id'];
                $_SESSION['product_id'] = $_GET['id'];
                $sql = "SELECT * FROM product WHERE id=$id";
                $user = mysqli_query($conn,$sql); 
                if(mysqli_num_rows($user) > 0){
                while($data = mysqli_fetch_assoc($user)){
                 ?>
        <div class="inforproduct-title">
            <div class="inforproduct-title_img">
                <div class="inforproduct-title_img-top">
                    <img src="image/<?php echo $data['product_img']?>">
                </div>
                <div class="inforproduct-title_img-bottom"></div>
            </div>
            <div class="inforproduct-title_body">
                <div class="inforproduct-title_body-title">
                    <h1><?php echo $data['title']?></h1>
                </div>
                <div class="inforproduct-title_body-price">
                    <b class="number"><?php echo $data['price']?></b>
                </div>
                <form action="cart_submit.php" method="POST">
                <div class="inforproduct-title_body-cart">
                    <div class="inforproduct-title_body-cart_number">
                        <p>Số lượng :</p>
                        <input type="number" class="cart_number" value="1" name="cart_number">
                    </div>
                    <div class="inforproduct-title_body-cart_submit">
                        <input type="submit" class="cart_submit" name="cart_submit" value="Thêm vào giỏ hàng">
                    </div>
                </div>
                </form>
                <div class="inforproduct-introduce">
                    <b>Giới thiệu</b>
                    <p><?php echo $data['descr']?></p>
                </div>
            </div>
        </div>
        <?php
                }
                }
            ?>
        <div class="inforproduct">
            <div class="product-title">
                <p><b>Đánh giá món ăn</b></p>
            </div>
            <?php
                include 'config.php';
                $id = $_GET['id'];
                $sql = "SELECT * FROM comment WHERE product_id=$id";
                $user = mysqli_query($conn,$sql); 
                if(mysqli_num_rows($user) > 0){
                while($data = mysqli_fetch_assoc($user)){
                    $_SESSION['id_comment'] = $data['id'];
                 ?>
                 <div class="inforproduct-comment">
                <div class="inforproduct-comment_avt"><img src="image/use1.png"></div>
                <div class="inforproduct-comment_content">
                    <div class="inforproduct-comment_content-use">
                        <b><?php echo $data['usename']?></b>
                    </div>
                    <div class="inforproduct-comment_content-body">
                        <p><?php echo $data['content']?></p>
                        <p class="text"><?php echo $data['date']?></p>
                    </div>
                </div>
                <form action="comment_del.php" method="POST">
                    <div class="inforproduct-comment_delete">
                     <input type="submit" name="commnet_del" value="Xóa">
                     </div>
                </form>
                </div>
            <?php
                }
                }
            ?>
            <form action="comment_submit.php" method="POST">
            <div class="inforproduct-comment_body">
                <p>Bình luận:</p>
                <textarea  name="content" class="hihi" rows="2" cols="70"></textarea>
            </div>
            <input type="submit" class="inforproduct-comment_submit" name="comment_submit" value="Gửi">
        </div>
        </form>
    </div>
    <div class="footer"></div>
</body>

</html>