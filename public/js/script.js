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
        $(this).parent().removeClass('active');
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
    $('.btn-upload').click(function(e){
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
                
                var post ="";

                var post = `
                
                <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="other_planets d-flex flex-column pt-5">
                        <h2 class ='text-center'>`+ response.post.name + `</h2>
                        <div class="planets  align-items-center pt-3">
                                <div class="other_planets_img" style ='background-image: url("images/`+ response.post.image + `"); background-size: cover;background-position: center'>
                                        <img class ='w-100 h-100' src="images/other_planet_1.png" alt="" style ='visibility: hidden;'>
                                    </div>
                                    <div class="other_planets_disc">
                                    `+ response.post.description + `
                                    </div>
                        </div>
                       
                    </div>
                </div>
                
                `;

                $('.posts').append(post);

                console.log(response)
            },
        });

    });
});