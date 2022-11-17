// $('.mycart-icon').on('mouseover', function() {
//     $(this).attr('src', 'frontend/img/ico/cart/cart-on.svg');
//   });
$(".inbox-icon, .notif-icon, .mycart-icon").hover(
    function () {
        const temp = $(this).find("img").attr("src").replace("-off", "-on");
        $(this).find("img").attr("src", temp);
    },
    function () {
        const temp = $(this).find("img").attr("src").replace("-on", "-off");
        $(this).find("img").attr("src", temp);
    }
);


function popUpBanner(e){
    alert('belom ada')
}


$('#testi').owlCarousel({
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: false,
    items: 2,
    stagePadding: 145,
    center: true,
    nav: false,
    dots: false,
    loop: true,
});


$(document).ready(function(){


    var owl = $('#bundle').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        items:2,
        navText:["<div class='nav-btn prev-slide'><i class='fa fa-angle-left'></i></div>","<div class='nav-btn next-slide'><i class='fa fa-angle-right'></i></div>"],
        rtl:true,
        smartSpeed:1200,
    });
    
    owl.on('initialized.owl.carousel', function(event) {
        setTimeout(function() {
            const act = $('#bundle .owl-item.active').eq(0);
            if(act) {
                act.addClass('ayam')
                const dataId = $("#bundle .owl-item.ayam").find(".bundle-img").attr("data-id");
                switch (dataId) {
                    case "1":
                        $("#bundle-caption #bundle-event").text("Hari Raya");
                        $("#bundle-caption #bundle-price").text("1.990.000");
                        break;
                    case "2":
                        $("#bundle-caption #bundle-event").text("Summer");
                        $("#bundle-caption #bundle-price").text("2.450.000");
                        break;
                    case "3":
                        $("#bundle-caption #bundle-event").text("Winter");
                        $("#bundle-caption #bundle-price").text("1.890.000");
                        break;

                    default:
                        break;
                }
            }
            const act2 = $('#bundle .owl-item.active').eq(1);
            if(act2) {
                act2.addClass('bebek')
            }  
        },1)
    });

    owl.trigger('initialized.owl.carousel')
    owl.on('changed.owl.carousel', function(event) {
        setTimeout(function() {
            const act = $('#bundle .owl-item.active').eq(0);
            if(act) {
                $(".owl-item").removeClass('ayam')
                act.addClass('ayam')
                const dataId = $("#bundle .owl-item.ayam").find(".bundle-img").attr("data-id");
                switch (dataId) {
                    case "1":
                        $("#bundle-caption #bundle-event").text("Hari Raya");
                        $("#bundle-caption #bundle-price").text("1.990.000");
                        break;
                    case "2":
                        $("#bundle-caption #bundle-event").text("Summer");
                        $("#bundle-caption #bundle-price").text("2.450.000");
                        break;
                    case "3":
                        $("#bundle-caption #bundle-event").text("Winter");
                        $("#bundle-caption #bundle-price").text("1.890.000");
                        break;
                    case "4":
                        $("#bundle-caption #bundle-event").text("Autumn");
                        $("#bundle-caption #bundle-price").text("2.000.000");
                        break;
                    case "5":
                        $("#bundle-caption #bundle-event").text("Spring");
                        $("#bundle-caption #bundle-price").text("2.130.000");
                        break;

                    default:
                        break;
                }
            } 
            const act2 = $('#bundle .owl-item.active').eq(1);
            if(act2) {
                $(".owl-item").removeClass('bebek')
                act2.addClass('bebek')
            } 
        },1)
    });  
});



$('#BannerPanjang').owlCarousel({
    rtl:true,
    nav: false,
    dots: false,
    loop: true,
    autoplay: true,
    autoplayTimeout:3000,

    items : 1, 
    itemsDesktop : false,
    itemsDesktopSmall : false,
    itemsTablet: false,
    itemsMobile : false
});

// owl carousel product
$('#carou-cat').owlCarousel({
    center: false,
    loop:true,
    stagePadding: 50,
    nav:true,
    dots: false,
    navText:["<div class='nav-btn prev-slide'><i class='fa fa-angle-left'></i></div>","<div class='nav-btn next-slide'><i class='fa fa-angle-right'></i></div>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});

$('#carou-cat2').owlCarousel({
    stagePadding: 50,
    loop:true,
    center:false,
    margin:20,
    nav:true,
    dots: false,
    navText:["<div class='nav-btn prev-slide'><i class='fa fa-angle-left'></i></div>","<div class='nav-btn next-slide'><i class='fa fa-angle-right'></i></div>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});

$('.hashtag').owlCarousel({
    stagePadding:20,
    nav:true,
    dots:false,
    navText:["<div class='nav-btn prev-slide'><i class='fa fa-angle-left'></i></div>","<div class='nav-btn next-slide'><i class='fa fa-angle-right'></i></div>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});


// js Carocaro
$('#carocaro').owlCarousel({
    stagePadding: 20,
    center:false,
    nav:true,
    dots: false,
    navText:["<div class='nav-btn prev-slide'><i class='fa fa-angle-left'></i></div>","<div class='nav-btn next-slide'><i class='fa fa-angle-right'></i></div>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:4
        },
        1000:{
            items:3
        }
    }
});


// pop up delivery
function popUpDelivery(e){
    document.getElementById('popUpDelivery').style.display = "flex";
    document.body.style.overflow = 'hidden';
}

const closePopUpDelivery = () => {
    document.getElementById('popUpDelivery').style.display = "none";
    document.body.style.overflow = 'auto';
}





// notif lonceng
$(".dropdown-menu").on("click", function (e) {
    e.stopPropagation();
});

$('#deliver-hover').hover(function () {
        // over
        $("#deliver-hover p").css({"color": "#000"});
        $("#deliver-hover span").css({"color": "#FF4200"});

    }, function () {
        // out
        $("#deliver-hover p").css({"color": "#898989"});
        $("#deliver-hover span").css({"color": "#898989"});
    }
);

const mainImg = document.getElementById("mainImgProd");
const smallimg = document.getElementsByClassName("small-img");

Array.from(smallimg).forEach((e) => {
    e.addEventListener("click", () => {
        mainImg.src = e.src;
    });
});

// banjang popup

$('#myPopup').on("click"), function (e){
    e.stopPropagation();
}

// banjang popup

$('#popop-banjang').on("click"), function (e){
    e.stopPropagation();
}

// pop up banjang
function popUpBanjang(e){
    document.getElementById('popUpBanjang').style.display = "flex";
    document.body.style.overflow = 'hidden';
}

const closePopUpBanjang = () => {
    document.getElementById('popUpBanjang').style.display = "none";
    document.body.style.overflow = 'auto';
}


