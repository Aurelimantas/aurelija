jQuery(document).ready(function ($) {
    $("a[href='#portfolio']").click(function () {
        $('html, body').animate({
            scrollTop: $("#about").offset().top - 100
        }, 2000);
    });

    $("a[href='#gallery']").click(function () {
        $('html, body').animate({
            scrollTop: $("#fullwidth").offset().top - 50
        }, 2000);
    });

    $("a[href='#dropdown']").click(function () {
        $('html, body').animate({
            scrollTop: $("#foto").offset().top
        }, 2000);
    });
    $("a[href='#home']").click(function () {
        $('html, body').animate({
            scrollTop: 0
        });
    });
    $(".navigation").prepend('<button class="burger"><span class="bar"></span><span class="bar"></span><span class="bar"></span></button> ');

    $(".burger").click(function () {
        $('.navigation li').toggleClass('hide')
    });

    $(".change-slide").click(plusSlides);
    var slideIndex = 0;
    showSlides(slideIndex);

    function plusSlides() {
        var index = $(this).data('slide');
        showSlides(slideIndex += index);
    }
    var slideIndex = 0;
    setTimeout(showSlides, 5000); // Change image every 5 seconds
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        //        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        //        dots[slideIndex - 1].className += " active";

    }
    $('.read').click(createdDiv);

    function createdDiv() {
        var div = document.getElementById("newpost");
        if (div.style.display == "block") {
            div.style.display = "none";
        } else {
            div.style.display = "block";
        }
    }

});
