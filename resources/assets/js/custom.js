$(document).ready(function(){
    // Can also be used with $(document).ready()
    $(window).on('load', function() {
        $('.flexslider').flexslider({
            animation: "fade",
            animationSpeed: 1000,
            useCSS: true,
            controlNav: false,
            touch: true,
        });
    });
    
    
    // Slider
    // $(document).ready(function(){
    //     $('.bxslider').bxSlider({
    //         mode: 'fade',
    //         pager: false,
    //         responsive: true,
    //         touchEnabled: false, 
    //          auto: true,
    //          nextText: '<i class="fas fa-angle-right"></i>',
    //          prevText: '<i class="fas fa-angle-left"></i>'
    //     });
    // });

    // Custom Accordion
    var acc = document.getElementsByClassName("custom-accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("custom-accordion-active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        } 
      });
    }
    
});