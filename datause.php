<?php
    include 'config.php';
    $use = $_SESSION['use'];
    $sql = "SELECT * FROM user WHERE username = '$use' ";
    $datause = mysqli_query($conn,$sql);
    if(mysqli_num_rows($datause) > 0){
       $data = mysqli_fetch_assoc($datause);
    }
?>