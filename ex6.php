<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<style media="screen">
body{margin:0;padding:0;}
.contents{position: relative;width:100%;transition: all 0.25s ease;}
.contents .pro{position:relative;width:25%;padding-right:15px;height:auto;min-height: 120px;box-sizing: border-box;float:left;}
.contents .pro div{width:100%;height:auto;min-height: 200px;background-color: orange}
</style>
<script src='http://code.jquery.com/jquery-3.1.1.min.js'></script>
<script src='/js/jquery.ba-throttle-debounce.min.js'></script>
<script>
$(document).ready(function(){
	// 문서객체를 만든다.
	var $contents=$('.contents');

	$(window).on('resize',$.throttle(10000/1,function(){
		$contents.attr('width','100%');
	}));

	$(window).trigger('resize');

});
</script>
</head>


<body>
<div class="contents">
	<div class="pro"><div class=""></div></div>
	<div class="pro"><div class=""></div></div>
	<div class="pro"><div class=""></div></div>
	<div class="pro"><div class=""></div></div>
</div>
</body>
</html>
