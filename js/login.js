$(function(){
	$("#denglu").click(function(e){
		e.preventDefault();
		let u=$("#uname").val();
		let p=$("#pwd").val();
		let yzm=$("#yzm").val();
		let reg=/^[0-9a-zA-Z_]{3,12}$/i;
		let regpwd=/^[a-zA-Z0-9_]{8,12}$/;
		if(!reg.test(u)){
			alert("用户名格式不正确");
			return;
		}
		if(!regpwd.test(p)){
			alert("密码格式不正确");
			return;
		}
		$.ajax({
			type:"post",
			url:"php/adminlogin.php",
			data:{uname:u,upwd:p,yzm:yzm},
			success:function(data){
				if(data.code>0){
					alert(data.msg);
					sessionStorage.setItem("uname",u);
		              //4:跳转 index.html
		              setTimeout(function(){
		              	location.href = "index.html";
		              },3000)
				}else{
					alert(data.msg);
				}
			}
		})
	})
})
