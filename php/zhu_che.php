<?php
//注册信息的接收
@$n = $_REQUEST['uname'];
	$reg='/^[0-9a-zA-Z_]{3,12}$/i';
$rs=preg_match($reg,$n);
if($rs==0){
	die('{"code":-1,"msg":"用户名不正确"}');
}
@$p = $_REQUEST['upwd1'];
	$reg='/^[0-9a-zA-Z_]{8,12}$/i';
	$rs=preg_match($reg,$p);
	if($rs==0){
	die('{"code":-1,"msg":"密码不正确"}');
}
	
@$p1 = $_REQUEST['upwd2'];
	if($p1!==$p){
		die('{"code":-1,"msg":"重复密码不正确"}');
	}
@$u = $_REQUEST['user_name'];
	
@$s = $_REQUEST['site'];
@$ph = $_REQUEST['phone'];
$reg='/^(\+86|0086)?\s*1[3-8]\d{9}$/';
$rs=preg_match($reg,$ph);
	if($rs==0){
	die('{"code":-1,"msg":"手机格式不正确"}');
}

	
//链接数据库
require("tongyong.php");
//连接到数据库执行sql语句
$sql = "insert into user 
	values(null,'$n',md5('$p'),'$u','$s','$ph')";
$jieshou = mysqli_query($conn,$sql);
echo '{"code":1,"msg":"注册成功"}';
?>