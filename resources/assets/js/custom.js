$(document).ready(function(){
    // Slider
    $('.js-slick').slick({
      autoplay: true,
      autoplaySpeed: 5000,
      dots: true,
      draggable: false,
      fade: true,
      speed: 1000
    });
    
    $('.js-slick').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
      $(slick.$slides).removeClass('is-animating');
    });
    
    $('.js-slick').on('afterChange', function(event, slick, currentSlide, nextSlide) {
      $(slick.$slides.get(currentSlide)).addClass('is-animating');
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