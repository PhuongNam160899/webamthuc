<?php
include 'config.php';
session_start();
if ($_SESSION['use']=="")
{
    header("location:login.php");
} 
else
{
	//echo $_SESSION['use'];
    header("location:use.php");
}
?>