<?php
	require_once("tongyong.php");
	@$uname=$_REQUEST["uname"];
	if($uname!=null){
		$sql="select * from user where uname='$uname'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_row($result);
		if($row==null)
			echo "true";
		else 
			echo "false";
	}
	
?>