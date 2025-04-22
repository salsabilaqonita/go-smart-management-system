var swiper = new Swiper(".mentor-slider", {
    spaceBetween: 20,
    grabCursor:true,
    loop:true,

    pagination: {
      el: "swiper-pagination",
      clickable: true,
    },
    breakpoints: {
        540: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 4,
        },
        1024: {
          slidesPerView: 5,
        },

      },
    });


    var swiper = new Swiper(".reviews-slider", {
        spaceBetween:20,
        grabCursor:true,
        loop:true,
    
        pagination: {
          el: "swiper-pagination",
          clickable: true,
        },
        breakpoints: {
            540: {
              slidesPerView: 2,
            },
            768: {
              slidesPerView: 4,
            },
            1024: {
              slidesPerView: 5,
            },
    
          },
        });
    
