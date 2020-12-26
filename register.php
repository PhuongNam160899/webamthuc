 <!DOCTYPE html>
 <html>

 <head>
     <title>Đăng Ký</title>
     <link href="login.css" rel="stylesheet" />
     <link href="Demo.css" rel="stylesheet" />
     <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>

 <body>
<div class="header">
        <div class="header">
        <?php include'header.php'?>
    </div>
    </div>
     <div class="login-body">
         <div class="login-body_from">
             <div class="login-body_tilte">
                 <p><b>Đăng     Ký</b></p>
             </div>
             <form action="register_submit.php" method="POST">
                 <input type="text" name="usename" class="input-title" placeholder="Nhập usename">  
                 <input type="password" class="input-title" name="password" id="" placeholder="Nhập mật khẩu">
                 <input type="password" class="input-title" name="repassword" id="" placeholder="Nhập lại mật khẩu">
                 <input type="text" class="input-title" name="sdt" id="" placeholder="Nhập số điện thoại">
                 <input type="email" class="input-title" name="gmail" id="" placeholder="Nhập Gmail">  
                 <input type="text" class="input-title" name="diachi" id="" placeholder="Nhập địa chỉ">          
                 <input type="submit" name="submit" class="input-button_submit" value="Đăng Ký">
             </form> 
             <p class="login-body_or">hoặc</p>
             <div class="login-body_isaccount"><p>Bạn đã có tài khoản ?</p><a href="login.php">Đăng nhập.</a></div>              
         </div>
     </div>
     <div class="footer"></div>
 </body>
 </html>