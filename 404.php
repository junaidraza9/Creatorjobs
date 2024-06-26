<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>YT Jobs</title>
    <link rel="icon" href="img/favicon.png" type="image/png">
<style>
  @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500&display=swap');
</style>
	<style type="text/css">
		body {
	overflow: hidden;
	font-family: 'Gemunu Libre', sans-serif;
}

.starsBG {
	background: black url(img/stars.png) repeat;
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	display: block;
	z-index: 0;
}

.container {
    width: 1200px;
    margin: 0 auto;
}

.main {
    display: flex;
    justify-content: center;
    align-items: center;
	height: 60vh;
}

.main2 {
    text-align: center;
}

.main2 p {
    color: #fff;
    font-size: 50px;
    margin: 0 0 30px;
	letter-spacing: 8px;
	font-family: 'Open Sans', sans-serif;
}

.main2 button {
    background: #8a6dd4;
    color: #fff;
    padding: 10px;
    width: 220px;
    border-radius: 50px;
    cursor: pointer;
    font-size: 17px;
}

.main2 button:hover {
    border-radius: 5px;
}

h1 {
    font-size: 250px;
    color: #fff;
	margin-left: 30px;
    margin-right: 50px;
	text-shadow: 0 1px 0 #8a6dd4, 0 2px 0 #8a6dd4, 0 3px 0 #8a6dd4, 0 4px 0 #8a6dd4, 0 5px 0 #8a6dd4, 0 6px 0 #8a6dd4, 0 7px 0 #8a6dd4, 0 8px 0 #8a6dd4, 0 0 5px #8a6dd400, 0 -1px 3px #8a6dd445, 0 9px 9px #8a6dd452, 0 12px 12px #8a6dd452, 0 15px 15px #8a6dd44d;
}

.saturn {
    width: 360px;
}

.ufo1 {
	position: absolute;
    top: 50px;
	z-index: 9;
    width: 100px;
	-webkit-animation: ufo1 20s linear infinite;
	-moz-animation: ufo1 20s linear infinite;
	-o-animation: ufo1 20s linear infinite; 
}

@-webkit-keyframes ufo1 {
	0% {
		margin-left:1400px;
	}
	100% {
		margin-left: -1000px;
	}
}

.ufo2 {
	position: absolute;
    bottom: 80px;
	z-index: 9;
    width: 90px;
	-webkit-animation: ufo2 20s linear infinite;
	-moz-animation: ufo2 20s linear infinite;
	-o-animation: ufo2 20s linear infinite;
}

@-webkit-keyframes ufo2 {
	0% {
		margin-left:-1400px;
	}
	100% {
		margin-left: 2000px;
	}
}
	</style>
</head>
<body>

<!-- UFO Images -->
<img src="img/ufo.png" class="ufo1">
<img src="img/ufo2.png" class="ufo2">

<!-- Stars background -->
<div class="starsBG">
	<div class="container">
		<div class="main">
			<!-- 4 TEXT -->
			<h1>4</h1>
			
			<!-- Saturn image -->
			<img src="img/saturn.png" class="saturn">
			
			<!-- 4 TEXT -->
			<h1>4</h1>
		</div>
		
		<div class="main2">
			<!-- TEXT -->
			<p>UH/OH! You're lost.</p>
			
			<!-- Button -->
		<a href="index"><button>RETURN TO HOME</button></a>	
		</div>
	</div>
</div>
<!-- Stars background End -->

</body>
</html>