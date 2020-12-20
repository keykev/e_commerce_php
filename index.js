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

    let $deal_price = $("#deal-price");

    $qty_up.click(function(e) {
        //console.log("im working")

        let $qty = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`#product_price[data-id='${$(this).data("id")}']`)
        

        $.ajax({url: "Templates/ajax.php",type:'post',data:{itemid: $(this).data("id")},success:function(result) {
            console.log(result)
            let obj = JSON.parse(result);
            let item_price = obj[0]['item_price'];

            if($qty.val() >= 1 && $qty.val() <= 9) {
                $qty.val(function(i,oldVal) {
                    return ++oldVal;
                })
                $price.text(parseInt(item_price*$qty.val()).toFixed(2));

                let subTotal = parseInt($deal_price.text()) + parseInt(item_price);
                $deal_price.text(subTotal.toFixed(2));
            }

            

        }});
    })

    $qty_down.on('click',function(e) {
        //console.log("Im working v2")
        let $qty = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`#product_price[data-id='${$(this).data("id")}']`);

        $.ajax({url: "Templates/ajax.php",type:'post',data:{itemid: $(this).data("id")},success:function(result) {
            console.log(result)
            let obj = JSON.parse(result);
            let item_price = obj[0]['item_price'];

            if($qty.val() > 1 && $qty.val() <= 10) {
                $qty.val(function(i,oldValue) {
                    return --oldValue;
                })
                $price.text(parseInt(item_price*$qty.val()).toFixed(2));

                let subTotal = parseInt($deal_price.text()) - parseInt(item_price);
                $deal_price.text(subTotal.toFixed(2));
            }
        }});
        
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
