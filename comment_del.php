<?php
    include 'config.php';
    session_start();
    $id_comment = $_SESSION['id_comment'];
    $id = $_SESSION['product_id'];
    $use = $_SESSION['use'];
    if ( $id_comment != '') {
    	$sql = "DELETE FROM comment WHERE id =$id_comment AND usename='$use'";
    	$del = mysqli_query($conn, $sql);
        if (mysqli_num_rows($del) > 0) {
            header("location:inforproduct.php?id=$id");
        } 
        else{
            
            header("location:inforproduct.php?id=$id");
        }
        echo $id_comment;
       echo $use;
	} 
	else{
    header("location:inforproduct.php?id=$id");
} 
?>