$(document).ready(function () {
    $("#owl-demo").owlCarousel({
    autoplay: true,
    autoplayTimeout: 3000,
    items: 3,
    loop: true,
    margin: 10,
    nav: true,
    navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
    responsive: {
    0: {
    items: 2
    },
    600: {
    items: 3
    },
    1000: {
    items: 4 }
    }
    });
    });
