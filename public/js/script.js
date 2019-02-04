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
    
    $('.delete_post_1').click(function(){
        $('.delete_post_2').trigger('click');
    });


    $('.new_input').blur(function() {
        if( $(this).val().length !== 0 ) {

            $(this).prev().attr('style' , 'top: 100%');
        }
    });

    $('.step-1-end').click(function(){
        $('.step-1').addClass('active');
        $('.step-2').addClass('active');
    });
    $('.step-2-end').click(function(){
        $('.step-2').removeClass('active');
        $('.step-3').addClass('active');
    });

    $('.step-3-end').click(function(){
        $('.step-3').removeClass('active');
        $('.step-4').addClass('active');
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
        $('.new_planet').removeClass('active');
        e.preventDefault();

        $.ajax({
            url:'/add_post',
            data:new FormData($("#upload_form")[0]),
            dataType:'json',
            async:false,
            type:'POST',
            processData: false,
            contentType: false,
            success:function(response){
                
                var post ="";

                var post = `
                
                <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="other_planets d-flex flex-column pt-5">
                <a style ='color: white; text-decoration: none;' href ="/post/`+ response.post.id +`"><h2 class ='text-center'>`+ response.post.name + `</h2></a> 
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





// $(document).ready(function(){
//     $('.delete_user').click(function(e){
//         e.preventDefault();

//         var id = $(this).parent().attr('id');

//         console.log('/user_delete/' + id );

//         $.ajax ({
//             headers: {
//                 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
//               },
//             url: "/user_delete/" + id ,
//             type : 'POST',

//             success: function()
//             {
//                 console.log('done');
//             },

//             error: function()
//             {
//                 console.log('nope');
//             }


//         });

//     });



// });