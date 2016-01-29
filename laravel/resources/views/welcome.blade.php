<!doctype html>
<html>
<head>
<title>layout</title>
<meta charset="utf-8">
<style type="text/css">
html, body{
	margin:0 auto;
	padding: 0;
	width:100%;
	height:100%;
}
#wrap{
	margin:0 auto;
	padding: 0;
	background-color: green;
	color: #FFF;
	width: 100%;
	height:100%;
	text-align: center;
	font-size: 22px;
}
header{
	padding: 0;
	font-size: 24px;
	height: 3%;
}
footer{
	padding: 0;
	font-size: 20px;
	width: 100%;
	height: 3%;
	bottom: 40px;
}
span{
	padding: 20px 0;
	width: 33.333333%;
	float: left;
	height: 100%;
}
article{
	padding: 0;
	width: 100%;
	min-height: 86.1%;
	font-size:19px;
}
ol{
	margin: 0; 
	padding: 0; 
	width: 100%;
	list-style-position: inside;
}
ul{
	margin: 0; 
	padding: 0; 
	width: 100%;
	list-style: none;
}
div{
	width: 33.333333%;
}
.float_left{
	float: left;
}
.black{
	background-color: black;
}
.gray{
	background-color: gray;
}
.yellow{
	background-color: yellow;
}
.orange{
	background-color: orange;
}
.blue{
	background-color: blue;
}
.darkblue{
	background-color: darkblue;
}
.purple{
	background-color: purple;
}
.brown{
	background-color: brown;
}
.center{
	margin: 0 auto;
}
.contents{
	width: 50%;
}
.sidebar{
	width: 25%;
}
</style>

</head>
<body>
	<div id="wrap">
		<header>
			<span class="black"></span>
			<span class="gray">Header</span>
			<span class="purple"></span>
		</header>
		<article class="float_left yellow">
			<div id="orange" class="center orange">
				<div class="float_left purple sidebar">
					<h3>Sidebar1</h3>
					<ol class="float_left blue">
						<li>Sidebar1 Menu</li>
						<li>Sidebar1 Menu</li>
						<li>Sidebar1 Menu</li>
						<li>Sidebar1 Menu</li>
						<li>Sidebar1 Menu</li>
						<li>Sidebar1 Menu</li>
						<li>Sidebar1 Menu</li>
						<li>Sidebar1 Menu</li>
					</ol>
				</div>
				<div class="float_left darkblue contents">
					<h3>Content</h3>
					<ul class="float_left brown">
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>CSS stands for Cascading Style Sheet.</li>
						<li>end</li>
					</ul>
				</div>
				<div class="float_left black sidebar">
					<h3>sidebar2</h3>
					<ol class="float_left blue" type="A">
						<li>Sidebar2 Menu</li>
						<li>Sidebar2 Menu</li>
						<li>Sidebar2 Menu</li>
						<li>Sidebar2 Menu</li>
						<li>Sidebar2 Menu</li>
					</ol>
				</div>
			</div>
		</article>
		<footer>
			<span class="purple"></span>
			<span class="gray">Footer</span>
			<span class="black"></span>
		</footer>
	</div>
</body>
<script type="text/javascript">
	var heightSetting = function(e){
		var orange = document.getElementById("orange");
		orange.style.height = null;

		var article = document.getElementsByTagName("article")[0];
		var wrap = document.getElementById("wrap");
		var header = document.getElementsByTagName("header")[0].getElementsByTagName("span")[1];
		var footer = document.getElementsByTagName("footer")[0].getElementsByTagName("span")[1];
		wrap.style.height = window.innerHeight + "px";
		orange.style.height = article.clientHeight + "px";
	}
	
	window.onload = function(e){
		heightSetting(e);
		window.addEventListener('resize', function(e){
			heightSetting(e);
		})
	}
	
</script>
</html>