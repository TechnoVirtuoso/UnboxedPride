
$(".accordion-box .accordion-head").click(function(){
    if($(this).hasClass("active")){
        $(this).parent().find($('.accordion-body')).slideUp();
        $(this).removeClass("active");
    }else{
        $('.accordion-body').slideUp();
       $(".accordion-head").removeClass("active");
        $(this).parent().find($('.accordion-body')).slideDown();
        $(this).addClass("active");
    }
})

$(".member-details .info-heading").click(function(){
    if($(this).hasClass("active")){
        $(this).parent().find($('.info-description')).slideUp();
        $(this).removeClass("active");
    }else{
        $('.info-description').slideUp();
       $(".info-heading").removeClass("active");
        $(this).parent().find($('.info-description')).slideDown();
        $(this).addClass("active");
    }
})

$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
        $('.main-header').addClass('fixed-header');
    }
    else {
        $('.main-header').removeClass('fixed-header');

    }
});


$(document).ready(function(){
    setTimeout(function() {
        $(".gif_layer_2").addClass("active");
        $(".gif_layer_mobile").addClass("active");
        $(".gif_layer_tablet").addClass("active");
      }, 3700);
      $(".form_button .button").click(function(){
        $(".gform_footer .gform_button").click();
      })

      $(".menu-items .item-list.dropdown").hover(function(){
        if($(this).hasClass("active")){
            $(this).find($(".sub-menu-wrap")).hide();
            $(this).removeClass("active");
        }else{
            $('.sub-menu-wrap').fadeOut();
            $(".menu-items .item-list.dropdown ").removeClass("active");
            $(this).find($(".sub-menu-wrap")).css("display","grid");
            $(this).addClass("active");
        }

    })

    $(".sf-field-taxonomy-text_filter .chosen-search-input").blur(function(){
        if($(".sf-field-taxonomy-text_filter #custom-select-filter option:selected").length >= 3) {
            $(".sf-field-taxonomy-text_filter .chosen-results").hide();
            if($(".sf-field-taxonomy-text_filter .active-results-append").length >= 1){
            }else{
                $(".sf-field-taxonomy-text_filter .chosen-drop").append("<div class='active-results-append'> Max 3 selections </div>");
            }
            $(".sf-field-taxonomy-text_filter .chosen-search-input").attr("disabled","disabled");
        }else{
            $(".sf-field-taxonomy-text_filter .active-results-append").remove();
            $(".sf-field-taxonomy-text_filter .chosen-results").show();
        }

       })

    $(".sf-field-taxonomy-therapist_personality .chosen-search-input").blur(function(){
        if($(".sf-field-taxonomy-therapist_personality #custom-select-filter option:selected").length >= 2) {
            $(".sf-field-taxonomy-therapist_personality .chosen-results").hide();
            if($(".sf-field-taxonomy-therapist_personality .active-results-append").length >= 1){

            }else{
                $(".sf-field-taxonomy-therapist_personality .chosen-drop").append("<div class='active-results-append'> Max 2 selections </div>");
            }
            // $(".sf-field-taxonomy-therapist_personality .chosen-search-input").attr("disabled","disabled");
        }
        else{
            $(".sf-field-taxonomy-therapist_personality .chosen-results").show();
            $(".sf-field-taxonomy-therapist_personality .active-results-append").remove();

        }
       })


    //    $(".chosen-search-input").attr("disabled","disabled");
    $(".chosen-choices .search-field .chosen-search-input").attr("readonly","readonly");

       $("#list-point.sf-field-submit input").click(function(){
        setTimeout(() => {
            $(".chosen-choices .search-field .chosen-search-input").attr("readonly","readonly");
        }, 1000);

       })

})


AOS.init(
    {once: true}
);

$(document).ready(function(){

    $('.team-carousel').owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        autoWidth:false,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:2
            },
            767:{
                items:3,
            },
            991:{
                items:4,
                autoplay: true,
                autoplaySpeed: 2000,
            },
            1360:{
                items:5
            }
        }
    })



});


$("#show_hide_filter").click(function () {
    $(".wrap-data .sidebar").toggleClass("active");
    $(this).toggleClass("active");
    if($("#show_hide_filter").hasClass("active")){
        $("#show_hide_filter .book-appoinment").text("Show Filters");
    }else{
        $("#show_hide_filter .book-appoinment").text("Hide Filters");
    }

})

$(".custom-select-container #custom-select-filter").change(function(){
    $("#list-point.sf-field-submit input").click();

})



var animation = bodymovin.loadAnimation({
    container: document.getElementById('text-animation'),
    renderer: 'svg',
    loop: false,
    autoplay: true,
     path: "https://lottie.host/b675849b-4587-4aef-8e0c-bfb0f19b6e69/p2JdlkatYA.json"
})




$(".chosen-search-input").change(function(){
    console.log("change");

})
