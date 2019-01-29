$(document).ready(function(){
    $('.fa-search').click(function(){
        $('.search').toggleClass("active");
    });

    $('.signup').click(function(){
        $('.log-in').removeClass('active');
        $('.singup').toggleClass('active');
    });

    $('.login').click(function(){
        $('.singup').removeClass('active');
        $('.log-in').toggleClass('active');
    });


    $('.fa-times').click(function(){
        $('.singup').removeClass('active');
    });
    $('.close').click(function(){
        $('.log-in').removeClass('active');
    });

});  


var swiper = new Swiper('.swiper-container', {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });