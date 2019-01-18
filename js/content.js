 var mySwiper = new Swiper ('.swiper-container', {
	autoplay:true,
    loop: true, 					// 循环模式选项
    pagination: {			 		//分页器
      el: '.swiper-pagination',
	  clickable :true,				//点击分页器切换
    },
    navigation: {					// 如果需要前进后退按钮
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });      