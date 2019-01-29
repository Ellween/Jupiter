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

    $('.satelite_img').click(function(){
        $('.new_planet').toggleClass('active');
    });

    $('.planet_img').click(function(){
        $('.es').trigger('click');
    });
    

});  

$(document).ready(function(){

    $('.new_input').on({
      focus: function(){
        
        $(this).prev().addClass('active');
      },
      blur: function(){
        $(this).prev().removeClass('active');
      }
    })


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




//   Sending Post Ajax


$(document).ready(function(){
    $('.btn-sign_up').click(function(e){
        e.preventDefault();

        $.ajax({
            url:'/add_post',
            data:new FormData($("#upload_form")[0]),
            dataType:'json',
            async:false,
            type:'post',
            processData: false,
            contentType: false,
            success:function(response){
                console.log('yes')
            },
        });

    });
});