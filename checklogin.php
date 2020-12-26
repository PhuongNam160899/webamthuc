<?php
include 'config.php';
session_start();
if ($_SESSION['use']=="")
{
    header("location:login.php");
} 
else
{
    header("location:index.php");
}
?>