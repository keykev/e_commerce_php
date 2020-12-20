$(document).ready(function() {
    $("#banner-area .owl-carousel").owlCarousel({
        dots:true,
        items:1,
    });

    $("#top-sale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        responsive: {
            0: {
                items:1
            },
            600: {
                items:3
            },
            1000: {
                items:5
            }
        }
    });

    var $grid = $(".grid").isotope({
        itemSelector: ".grid-item",
        layoutMode: "fitRows"
    });

    $("button").on('click',function(){
        var studio = $(this).attr('data-filter');
        $grid.isotope({filter: studio});
    }); 

    $("#new-anime .owl-carousel").owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        responsive: {
            0: {
                items:1
            },
            600: {
                items:2
            },
            1000: {
                items:5
            }
        }
    })

    $("#blogs .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:true,
        responsive: {
            0: {
                items:0
            },
            600: {
                items:3
            }
        }
    })


    //product section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    //let $qty = $(".qty .qty_input");

    $qty_up.on('click',function(e) {
        let $qty = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($qty.val() >= 1 && $qty.val() <= 9) {
            $qty.val(function(i,oldVal) {
                return ++oldVal;
            })
        }
    })

    $qty_down.on('click',function(e) {
        let $qty = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($qty.val() > 1 && $qty.val() <= 10) {
            $qty.val(function(i,oldValue) {
                return --oldValue;
            })
        }
    });

});


// var qty_up = document.querySelector(".qty-up");
// var qty = document.querySelector(".qty_input");


// qty_up.addEventListener('click',function(e) {
//     let qty = document.querySelector(".qty_input")
    

//     if(qty >= 1 && qty < 10) {
//         qty.value += 1;
//     }
// })

