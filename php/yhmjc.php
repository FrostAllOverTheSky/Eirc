<?php
  $u=$_REQUEST["uname"];
  require("tongyong.php");
  $sql="select * from user where uname='$u'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_row($result);
  if($row==null){
    echo "用户名可用";
  }else{
    echo "用户已存在";
  }
?>