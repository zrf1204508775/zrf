
<?php 
	require  '../components/head.html'; 
?>

<title>content</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/css/swiper.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/js/swiper.min.js"></script>

<link rel="stylesheet" href="../css/content.css" />
</head>
<body>


<div class="main">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide" style="background: url(../img/1.jpg) no-repeat; background-position: center center;"></div>
			<div class="swiper-slide" style="background: url(../img/2.jpg) no-repeat; background-position: center center;"></div>
			<div class="swiper-slide" style="background: url(../img/3.jpg) no-repeat; background-position: center center;"></div>
		</div>
		<!-- 如果需要分页器 -->
		<div class="swiper-pagination"></div>
		
		<!-- 如果需要导航按钮 -->
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	
	</div>
	<!-- 导航等组件可以放在container之外 -->
</div>


<script src="../js/content.js"></script>
<?php
	require  '../components/footer.html';
?>