<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<style media="screen">
body{ margin:0;padding:0;height:4000px;}
ul{ list-style:none;}
header{ position: relative;width:100%;height:150px;border-bottom: 1px solid #ccc;}
header .inner{position: relative;width:900px;height:80px;margin:0 auto;background-color: orange;top:30px;}
header .inner .logo{position: absolute;top:0px;left:20px;}
header .innerClone{
	position: fixed;
	width:900px;
	height:45px;
	left:50%;
	top:-45px;
	margin-left:-450px;
	background-color: rgba(0,0,0,0.8);
	color:#fff;
	transition: all 0.25s ease;
}
header .innerClone.slideDown{
	top:0px;
}
header .innerClone #gnb{
	position: absolute;
	top:100px left:320px;
	height:45px;
	margin-top:-10px;
	border:0px solid #fff;
}
header .innerClone .logo{
	position: absolute;
	top:-20px;
	left:20px;
}


#gnb{position:absolute;top:10px;left:120px;}
#gnb ul{overflow: hidden;}
#gnb ul li{display: block;padding-right:20px;float:left;}


header .inner.navFixed{position: fixed;top:0;left:50%;margin-left:-450px;}
</style>
<script src='http://code.jquery.com/jquery-3.1.1.min.js'></script>
<script>
$(document).ready(function(){
	// 변수를 선언한다.
	var $nav=$('header').find('.inner');
	var navOffsetTop=$nav.offset().top;
	var navClone=$nav.contents().clone();
	var $innerClone=$("<div class='innerClone'></div>").html(navClone);
	$('header').append($innerClone);

	$(window).scroll(function(){
		if($(this).scrollTop()>navOffsetTop){
			$innerClone.addClass('slideDown');
		}else{
			$innerClone.removeClass('slideDown');
		}
	});
});
</script>
</head>


<body>
<header>
	<div class="inner">
		<h1 class='logo'>Logo</h1>
		<nav id='gnb'>
			<ul>
				<li>Home</li>
				<li>company</li>
				<li>business</li>
				<li>community</li>
				<li>contect-us</li>
			</ul>
		</nav>
	</div>
</header>
</body>
</html>
