new WOW().init();


$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
  })
})







// menu hambuger
$(".hamburger").on("click", function () {
  if (!$(this).hasClass("is-active")) {
    $(this).addClass("is-active")

    $('html').addClass('fixed');

  } else {
    $(this).removeClass("is-active")
    $('html').removeClass('fixed');
    $('.navbar').removeClass('nav-bg');
    if ($(document).scrollTop() <= 70 && ($(window).width() <=767)) {

      $('html').toggleClass('fixed');

    }
  }
});

$(function () {
  'use strict'

  $('.nav-link').on('click', function () {
    $('.offcanvas-collapse').removeClass('open')
    $('.hamburger').removeClass('is-active')
    $('html').removeClass('fixed');

  })
})


$(document).ready(function() {
  $('#pratos-slider').on('init', function(e, slick) {
      var $firstAnimatingElements = $('div.main-banner__items:first-child').find('[data-animation]');
      doAnimations($firstAnimatingElements);    
  });

  $('#pratos-slider').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
      var $animatingElements = $('div.main-banner__items[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
      doAnimations($animatingElements);    
  });

  $('.main-banner__content').slick({
    infinite: true,
    fade: true,
    cssEase: 'linear',
    autoplay:true,
    autoplaySpeed: 5000
  });

  function doAnimations(elements) {
    var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    elements.each(function() {
      var $this = $(this);
      var $animationDelay = $this.data('delay');
      var $animationType = 'animated ' + $this.data('animation');
      $this.css({
        'animation-delay': $animationDelay,
        '-webkit-animation-delay': $animationDelay
      });
      $this.addClass($animationType).one(animationEndEvents, function() {
        $this.removeClass($animationType);
      });
    });
  }
});



function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}






function openModal1() {
  document.getElementById("myModal1").style.display = "block";
}

function closeModal1() {
  document.getElementById("myModal1").style.display = "none";
}

var slideIndex = 1;
showSlides1(slideIndex);

function plusSlides1(n) {
  showSlides1(slideIndex += n);
}

function currentSlide1(n) {
  showSlides1(slideIndex = n);
}


function showSlides1(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides1");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}


