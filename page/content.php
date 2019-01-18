
<?php 
	require  '../components/head.html'; 
?>

<title>content</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/css/swiper.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/js/swiper.min.js"></script>


<style>
.swiper-container {
    width: 1200px;
    height: 600px;
	overflow: hidden;
}
.swiper-container .swiper-slide img{
	width: 100%;
	height: 100%;
}
</style>

</head>
<body>


<div class="main">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide"><img src="../img/1.png" /></div>
			<div class="swiper-slide"><img src="../img/2.png" /></div>
			<div class="swiper-slide"><img src="../img/8.jpg" /></div>
			<div class="swiper-slide"><img src="../img/4.png" /></div>
			<div class="swiper-slide"><img src="../img/3.png" /></div>
		
		</div>
		<!-- 如果需要分页器 -->
		<div class="swiper-pagination"></div>
		
		<!-- 如果需要导航按钮 -->
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
		
		<!-- 如果需要滚动条 -->
		<div class="swiper-scrollbar"></div>
	</div>
	<!-- 导航等组件可以放在container之外 -->
</div>

<script>        
  var mySwiper = new Swiper ('.swiper-container', {
	autoplay:true,
    loop: true, 					// 循环模式选项
    pagination: {			 		//分页器
      el: '.swiper-pagination',
    },
    navigation: {					// 如果需要前进后退按钮
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    
 
  })        
  </script>
<?php
	require  '../components/footer.html';
?>