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
        <div class="slide">
            <div class="slide-image">
                <img src="image/anh1.jpg" />
            </div>
        </div>
        <div class="Category">
            <div class="Category-title">
                <p><b>Thể Loại</b></p>
            </div>
            <?php
                include 'category.php';
                if(mysqli_num_rows($user) > 0){
                while($data = mysqli_fetch_assoc($user)){
                ?>
            <a href="menu.php?id=<?php echo $data['id'];?>">
                <div class="Category-body">
                    <div class="Category-body_img">
                        <img src="image/<?php
                        echo $data['Category_img'];
                        ?>" />
                    </div>
                    <div class="Category-body_title">
                        <p><?php
                        echo $data['Category'];
                        ?>
                        </p>
                    </div>
                </div>
            </a>
            <?php
                }
                }
            ?>
        </div>
        <div class="product">
            <div class="product-title">
                <p><b>Sản Phẩm</b></p>
            </div>
            <?php
                include 'indexproduct.php';
                if(mysqli_num_rows($user) > 0){
                while($data = mysqli_fetch_assoc($user)){
                 ?>
            <a href="inforproduct.php?id=<?php echo $data['id'];?>">
                <div class="product-body">
                    <div class="product-body_img">
                        <img src="image/<?php echo $data['product_img']?>">
                    </div>
                    <div class="product-body_title">
                        <p><?php echo $data['title']?></p>
                    </div>
                    <div class="product-body_price"><b class="number"><?php echo $data['price']?></b></div>
                </div>
            </a>
            <?php
                }
                }
            ?>
        </div>
    </div>
    <div class="footer"></div>
</body>

</html>