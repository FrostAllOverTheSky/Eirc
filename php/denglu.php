<?php
@$u=$_REQUEST["uname"];
@$p=$_REQUEST["upwd"];
require("tongyong.php");
$sql="select * from user where uname='$u'and upwd='$p'";
$result=mysqli_query($conn,$sql);
$res=mysqli_fetch_row($result);
if($res==true){
	echo "登陆成功";
}else{
	echo "登录失败";
}
?>