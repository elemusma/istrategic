// $('.products-carousel').owlCarousel({
//     // center: true,
//     loop:false,
//     margin:10,
//     nav:true,
//     dots:false,
//     // stagePadding:170,
//     autoplay:false,
//     autoplayTimeout:2500,
//     autoplayHoverPause:false,
//     animateIn: 'fadeIn',
//     animateOut: 'fadeOut',
//     // navText : ["<img src='/wp-content/uploads/2021/07/Arrow-Left-Blair-ITC.png' />","<img src='/wp-content/uploads/2021/07/Arrow-Right-Blair-ITC.png' />"],
//     responsive:{
//         0:{
//             items:2
//         },
//         600:{
//             items:3
//         },
//         1000:{
//             items:4
//         }
//     }
// });

$('.header-carousel').owlCarousel({
    // center: true,
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    // stagePadding:170,
    autoplay: true,
    autoplayTimeout: 3500,
    autoplayHoverPause: false,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    // navText : ["<img src='/wp-content/uploads/2021/07/Arrow-Left-Blair-ITC.png' />","<img src='/wp-content/uploads/2021/07/Arrow-Right-Blair-ITC.png' />"],
    items: 1,
    // responsive:{
    //     0:{
    //         items:2
    //     },
    //     600:{
    //         items:3
    //     },
    //     1000:{
    //         items:4
    //     }
    // }
});

$('.col-card-carousel').owlCarousel({
    // center: true,
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    // stagePadding:170,
    autoplay: false,
    autoplayTimeout: 3500,
    autoplayHoverPause: false,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    navText: ["<img src='/wp-content/uploads/2022/07/Arrow-Left-Chevron.png' />", "<img src='/wp-content/uploads/2022/07/Arrow-Right-Chevron.png' />"],
    items: 1,
    // responsive:{
    //     0:{
    //         items:2
    //     },
    //     600:{
    //         items:3
    //     },
    //     1000:{
    //         items:4
    //     }
    // }
});