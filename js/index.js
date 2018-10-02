$(function(){
	let $lift=$("#zkk1");
	let $f1=$("#zk8");
	let $f2=$("#zk26");
	$lift.on("click","a",function(e){
		e.preventDefault;
		var $li=$(this);
		var offsetTop=$li.offset().top;
		$("html,body").stop(true).animate({
			scrollTop:offsetTop+110
		},500)
	})
	$(window).scroll(function(){
		let scrollTop=$(window).scrollTop();
		if($f1.offset().top<scrollTop+innerHeight/2){
			$f2.show();
		}else{
			$f2.hide();
		}
			
	})
	$f2.on("click","div:nth-child(2)",function(e){
		e.preventDefault;
		let $li=$(this);
		let offsetTop=$li.offset().top;
		$("html,body").stop(true).animate({
		scrollTop:offsetTop-10000
		},1000)
	})
})
