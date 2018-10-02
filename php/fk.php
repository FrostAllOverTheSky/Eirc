<?php
@$fn = $_REQUEST['fname'];
	if($fn===null || $fn===''){
		die('{"code":-1,"msg":"请留下姓名"}');
	}
@$fs = $_REQUEST['fsf'];
@$s = $_REQUEST['site'];
@$fph = $_REQUEST['phone'];
@$ji = $_REQUEST['jianyi'];
	if($ji===null || $ji===''){
		die('{"code":-1,"msg":"请留下你先说的话"}');
	}
require("tongyong.php");
$sql = "insert into fankui values(null,'$fn','$fs','$s','$fph','$ji')";
$fankuis = mysqli_query($conn,$sql);
if($fankuis===false){
	echo '{"code":-1,"msg":"错误404"}';
}else{
	echo '{"code":1,"msg":"提交成功感谢你的反馈"}';
}
?>