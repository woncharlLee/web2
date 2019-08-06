<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<style media="screen">
body{
	margin:0;
	padding:0;
}
ul{
	list-style: none;
	margin:0;
	padding:0;
}
a,a:link,a:hover,a:visited{
	text-decoration: none;
}
nav{
	position: relative;
	width:100%;
	height:40px;
	top:60px;
	background-color: rgba(255, 0, 0, 0.5);
}
nav ul{
	width:90%;
	overflow: hidden;
	margin:0 auto;
}
nav>ul>li{
	float: left;
}
nav>ul>li>a{
	display: inline-block;
	width:18vw;
	box-sizing: border-box;
	line-height:40px;
	color:#fff;
	text-align:center;
}
nav ul ul{
	display:none;
	position: absolute;
}
nav ul ul.menuOver{
	display:block;
}
nav ul ul a{
	display: inline-block;
	width:18vw;
	box-sizing: border-box;
	line-height: 30px;
	border:1px solid #ccc;
	margin-bottom: 2px;
	margin-left:5px;
}
nav ul ul a:hover{
	background-color: #336699;
	color:#fff;
}
@media (max-width:480px) {
	nav{
		background-color: rgba(0, 0, 255, 0.5);
		height:30px;
		top:40px;
		background-color: inherit;
	}
	nav ul{
		width:100%;
	}
	nav ul ul{
		position:relative;
	}
	nav>ul>li{
		float: none;
	}
	nav>ul>li>a{
		width:100%;
		line-height: 30px;
		background-color: rgba(0, 0, 255, 0.5);
	}
	nav ul ul a{
		display: inline-block;
		width:100%;
		background-color: rgba(0, 255, 0, 0.5);
	}

}
</style>
<title>Document</title>
<script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
<script>
$(document).ready(function(){
	// 문서객체를 만든다.
	var $menu=$('nav>ul>li');


	$(window).resize(function(){
		if($(window).width()<=480){
			$menu.click(function(){
				$(this).find('ul').slideToggle();
			});
		}else{
			$menu.hover(
				function(){
					$(this).find('ul').addClass('menuOver');
				},function(){
					$(this).find('ul').removeClass('menuOver');
				}
			);
		}
	}); //  resize  End -------------------

});
</script>
</head>


<body>
<nav>
	<ul>
		<li><a href="#">menu1</a></li>
		<li><a href="#">menu2</a>
			<ul class='sub'>
				<li><a href="#">menu21</a></li>
				<li><a href="#">menu22</a></li>
				<li><a href="#">menu23</a></li>
			</ul>
		</li>
		<li><a href="#">menu3</a></li>
		<li><a href="#">menu4</a>
			<ul>
				<li><a href="#">menu41</a></li>
				<li><a href="#">menu42</a></li>
				<li><a href="#">menu43</a></li>
				<li><a href="#">menu44</a></li>
			</ul>
		</li>
		<li><a href="#">menu5</a></li>
	</ul>
</nav>
</body>
</html>
