<?php
session_start();
?>
 <!DOCTYPE html>
 <html>
 <head>
     <title>Người Dùng</title>
     <link href="login.css" rel="stylesheet" />
     <link href="Demo.css" rel="stylesheet" />
     <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
 </head>

 <body>
 <div class="header">
        <?php include'header.php'?>
    </div>
     <div class="login-body">
         <div class="login-body_from">
             <div class="login-body_tilte">
                 <p><b>Người Dùng</b></p>
             </div>
             <form action="use_submit.php" method="POST">
             <div class="use"><b>Họ và tên :</b><input type="text" name="hoten" value="<?php
                include 'datause.php';
                echo $data['hoten'];
                ?>" class="use-input"></div>
             <div class="use"><b>Số Điện Thoại :</b><input type="text" name="sdt" value="<?php
                include 'datause.php';
                echo $data['sdt'];
                ?>" class="use-input" readonly></div>
             <div class="use"><b>Địa Chỉ :</b><input type="text" name="diachi" value="<?php
                include 'datause.php';
                echo $data['diachi'];
                ?>" class="use-input"></div>
             <div class="use"><b>Gmail :</b><input type="text" name="gmail" value="<?php
                include 'datause.php';
                echo $data['gmail'];
                ?>" class="use-input"></div>
                <div class="use-submit">
                    <input type="submit" class="input-button_changepass" name="changepass" value="Đổi mật khẩu">
                    <input type="submit" class="input-button_save" name="save" value="Lưu thông tin">
                </div>
                <input type="submit" class="input-button_logout" name="logout" value="Đăng Xuất">
             </form>
         </div>
     </div>
     <div class="footer"></div>
 </body>
 </html>