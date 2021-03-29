<!--Script para carousel con items que vienen de backend-->
$(document).ready(function() {
    $(".carousel-item:first-child").addClass('active');
    var itemsPerSlide = 3;
    var totalItems = $(".itemDivImmediateDelivery").length;
    //se ocultan las flechas de mover el carrousel cuando tiene 3 o menos items para mostrar y se muestran los items
    if(itemsPerSlide >= totalItems){
        $(".immediateDeliveryControl").css('display', 'none');
        $('.itemDivImmediateDelivery').css('margin', 'auto');
        $(".carousel-item").css('display', 'unset');
    }

    //console.log('totalItems: '+totalItems);//for debug purpose

    $("#immediateDeliveryCarousel").on("slide.bs.carousel", function(e) {

        if(itemsPerSlide >= totalItems) {//solo se mueve el carousel cuando hay más de 3 cards
            return false
        }

        var $e = $(e.relatedTarget);
        var idx = $e.index();
        //console.log('index: '+idx);//for debug purpose
        if (idx == totalItems - (itemsPerSlide - 1)) {
            var it = itemsPerSlide - (totalItems - idx);
            //console.log('otro: '+it);//for debug purpose
            for (var i = 0; i < it; i++) {
                // append slides to end
                if (e.direction == "left") {//forward
                    $(".itemDivImmediateDelivery")
                        .eq(i)
                        .appendTo("#innerImmediateDelivery");
                }
            }
            /*$(".media-slider").css('width', '100');*/
        }
        if (e.direction == "right") {
            //console.log('index: '+idx);//for debug purpose
            if(idx == 0){
                $(".itemDivImmediateDelivery")
                    .eq(totalItems-1)
                    .prependTo("#innerImmediateDelivery");
            }

        }
    });
    /*$("#myCarousel").on("slid.bs.carousel", function(e) {
        $(".media-slider").css('width', '100%');
    });*/

});

