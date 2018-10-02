//js/header.js
$(function(){
	var link=document.createElement("link");
	link.rel="stylesheet";
	link.href="css/footer.css";
	document.head.appendChild(link);
	$("#footer").load("tongyong/footer.html",function(html){
		document.getElementById("footer")
						.innerHTML=html;
		
	})
});