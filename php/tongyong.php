<?php
header("Content-Type:application/json;charset=utf-8");
$conn=mysqli_connect("127.0.0.1","root","","eric",3306);
mysqli_query($conn,'set names utf8');
?>