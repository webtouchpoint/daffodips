$(document).ready(function(){
    // Slider    
    $('.bxslider').bxSlider({
        mode: 'fade',
        touchEnabled: false,
        controls: true,
        pager: false,
        speed: 500,
        auto: true
    });

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

    // Scroll
    AOS.init();

});