//MENU TOGGLE
$(".nav-btn").click(() => {
    $("nav").slideToggle();
});

$(".nav-close-btn").click(() => {
    $("nav").slideToggle();
});

$(".product-btn").click(() => {
    $("aside").slideToggle();
    $(".contact-box").hide();
});

$(".product-nav-close-btn").click(() => {
    $("aside").slideToggle();
});

