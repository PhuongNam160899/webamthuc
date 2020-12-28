 <?php
session_start();
?>
 <!DOCTYPE html>
 <html>
 <head>
     <title>Đăng Nhập</title>
     <link href="login.css" rel="stylesheet" />
     <link href="Demo.css" rel="stylesheet" />
     <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>

 <body>
    <div class="header">
        <?php include'header.php'?>
    </div>
     <div class="login-body">
         <div class="login-body_from">
             <div class="login-body_tilte">
                 <p><b>Đăng Nhập</b></p>
             </div>
             <form action="login_submit.php" method="POST">
                 <input type="text" name="usename" class="input-title" placeholder="Nhập số điện thoại">
                 <input type="password" class="input-title" name="password" id="" placeholder="Nhập mật khẩu">
                 <input type="radio" class="input-radio" name="" id="">
                 <label for="male">Ghi nhớ mật khẩu</label><br>
                 <input type="submit" name="submit" class="input-button_submit" value="Đăng Nhập">
             </form>
             <form action="register.php">
                 <input type="submit" class="input-button_register" name="" value="Đăng Ký">
             </form>
         </div>
     </div>
     <div class="footer"></div>
 </body>
 </html>