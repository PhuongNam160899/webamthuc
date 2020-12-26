<div class="header-body">
            <div class="header-body_top">
                <div class="header-logo">
                    <img src="image/logo.png" />
                </div>
                <div class="header-menu">
                    <ul class="header-menu_ul">
                        <a href="index.php">
                            <li class="menu">Trang Chủ</li>
                        </a>
                        <a href="">
                            <li class="menu">Giới Thiệu</li>
                        </a>
                        <a href="">
                            <li class="menu">Đơn Hàng</li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="header-body_bottom">
                <form action="search.php" method="POST">
                    <div class="header-body_bottom--left">
                        <input placeholder="Tìm kiếm" name="search" maxlength="100" class="search" />
                        <div class="search_submit"><input type="image" src="image/search1.png" alt="SUBMIT" name="search_submit" class="search_submit-img" /></div>
                        </div>
                </form>
                
                <div class="header-body_bottom--right">
                    <form action="checklogin.php" method="POST">
                        <input type="submit" class="cart" name="submit" value="Giỏ Hàng">
                    </form>
                    <a href="checkuser.php">
                        <div class="login">
                            <div class="login-img"><img src="image/use1.png"></div>
                            <div class="login-text">
                                <?php                              
                                if(isset($_SESSION['use'])){
                                ?>
                                <p><?php echo $_SESSION['use'] ?></p>
                                <?php 
                                }
                                else{
                                ?>
                                <p>Người dùng</p>
                                <?php
                                }

                                ?>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>