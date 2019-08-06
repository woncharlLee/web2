<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<style media="screen">
body{margin:0;padding:0;}
ul{list-style: none;}
a,a:hover,a:link,a:active{text-decoration: none;}

header{position: relative;width:100%;height:100px;border-bottom: 1px solid #ccc;}
header .inner{position:relative;width:900px;height:40px;background-color: orange;top:30px;margin:0 auto;}
.gnb{overflow: hidden;padding:0;}
.gnb ul{padding:0;}
.gnb li{float:left;padding:0;margin:0;width:20%;border:0px solid #ccc;}
.gnb li a{display: block;width:100%;text-align: center;color: inherit;}

.contents{
	position: relative;
	top:20px;
	margin:0 auto;
	width:900px;
	height:600px;
	border:1px solid #ccc;
	overflow:hidden;
}
.contents img{
	width:900px;
	display: none;
}
.contents img.visible{
	display: block;
}
</style>
<script src='http://code.jquery.com/jquery-3.1.1.min.js'></script>
<script>
$(document).ready(function(){
	// 문서객체를 만든다.
	var $menu=$('.gnb ul li').find('a');
	var $img=$('.contents').find('img');

	$img.each(function(index,item){
			$(this).attr('data-index',index);
	})

/*
	$menu.click(function(index){

		// $img.eq(index).addClass('visible');
	});
*/
$menu.click(function(){
	galllery(0);
});

function gallery(){
	alert('Hello');
	// $img.eq(index).addClass('visible');
}




});
</script>
</head>


<body>
<header>
	<div class="inner">
		<nav class='gnb'>
			<ul>
				<li><a href="#">menu1</a></li>
				<li><a href="#">menu2</a></li>
				<li><a href="#">menu3</a></li>
				<li><a href="#">menu4</a></li>
				<li><a href="#">menu5</a></li>
			</ul>
		</nav>
	</div>
</header>

<div class="contents">
	<img src="/images/01.jpg" alt="">
	<img src="/images/02.jpg" alt="">
	<img src="/images/03.jpg" alt="">
	<img src="/images/04.jpg" alt="">
	<img src="/images/05.jpg" alt="">
</div>
</body>
</html>
