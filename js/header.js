//js/header.js
$(function(){
	var link=document.createElement("link");
	var v = sessionStorage.getItem("uname");
	link.rel="stylesheet";
	link.href="css/header.css";
	document.head.appendChild(link);
	$("#header").load("tongyong/head.html",function(html){
		document.getElementById("header")
						.innerHTML=html;
		$(".biao").on("mouseenter","a",function(){
			let video=$(this).children().first();
				video[0].play();
		})
      if(v){
       var welcome =$(".dl2");
       welcome.html(`欢迎回来 ${v}
        <a href="05_logout.html">退出登录</a>`);
     }
	})
})