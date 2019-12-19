$(function() {


    /*
    *   Страницы: 
    *       "О компании (about-us.php)"
    *       убрать проверку if
    */ 
        if (document.querySelector('.map-wrapper .map-holder')) { resizeMapContainer() };

    
    /*
    *   Страницы: 
    *       "Главная (home.php)"
    *       убрать проверку if
    */ 
        if (document.querySelectorAll('.testimonialSlider__message-inner')) { testimonialMessageScrollBar() };


    /*
    *   Страницы: 
    *       "Обьекта (Object.php)"
    *       убрать проверку if
    */ 
        if (document.querySelector('.property-page')){
            imageSlider();
            stickyTabs();
            sideTeamCarousel();
        };


    /*
    *   Страницы: 
    *       "О компании (about-us.php)"
    *       "Страница обьекта (object.php)"
    */ 
        googleMap();

});

/* Itig Google Map 
*  Страницы: 
*       "О компании (about-us.php)"
*       "Страница обьекта (object.php)"
*/ 
const googleMap = () => {
    function initMap(){
        let popupContent = '<p class="marker_content">Турция, Алания, Махмутлар. <br>Пр. Барбаросса,<br> CEBECI 8, офис 6.</p>',
            image = {
                url: "../assets/images/icons/google-map-marker.svg",
                // size: new google.maps.Size(49, 65),
                // origin: new google.maps.Point(-3, 0),
                // anchor: new google.maps.Point(-40, 140)
            },
            coordinates = { lat: 36.4912844, lng: 32.0909761 },
            map = new google.maps.Map(document.querySelector(".map-holder"), {
                center: coordinates,
                zoom: 16,
                // disableDefaultUI: true,
                styles: [
                    {
                        "featureType": "poi",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#C5E3BF"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "lightness": 100
                            },
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#D1D1B8"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#C6E2FF"
                            }
                        ]
                    }
                ]
            }),
            marker = new google.maps.Marker({
                position: coordinates,
                map: map,
                icon: image,
                animation: google.maps.Animation.DROP
            }),
            infowindow = new google.maps.InfoWindow({
                content: popupContent
            });
    
        marker.addListener("click", function() {
            infowindow.open(map, marker);
        });
    };


    /*
    *  Убрать Проверку if !!!!
    */ 
    if (document.querySelector('.map-holder')) {
        initMap();
    }
};


/* Resize Map Container on Large Screen
*  Страницы: 
*       "О компании (about-us.php)"
*/ 
const resizeMapContainer = () => {
    let mapHolder = document.querySelector('.map-wrapper .map-holder');
    let holderWidth = '';
    
    if(window.innerWidth >= 992){
    
        holderWidth = window.innerWidth / 2 - 15;    
        mapHolder.style.width = holderWidth + 'px';
    }
};


/* Testimonial Message Custom ScrollBar
*  Страницы: 
*       "Главная (home.php)"
*/ 
const testimonialMessageScrollBar = () => {
    let list = document.querySelectorAll('.testimonialSlider__message-inner');

    list.forEach(function (item) {
        new SimpleBar(item,
            {
                autoHide: false
            });    
    });
}


/* Image Slaider || Sticky SideBar Tabs || Sidebar TEam Carousel 
*  Страницы: 
*       "Обьекта (Object.php)"
*/ 
const imageSlider = () => {
    let sliderSelector = ".slider-container",
        thumbsSelector = ".thumb-container";

    let slidesOptions = {
        wrapperClass: "slider-wrapper",
        slideClass: "slider-item",
        spaceBetween: 20,
        loop: true,
        loopedSlides: 5,
        navigation: {
            nextEl: ".slider-btn__next",
            prevEl: ".slider-btn__prev"
        }
    };

    let thumbOptions = {
        wrapperClass: "thumb-wrapper",
        slideClass: "thumb-item",
        spaceBetween: 10,
        // centeredSlides: true,
        slidesPerView: 4,
        touchRatio: 0.2,
        slideToClickedSlide: true,
        loop: true,
        loopedSlides: 5,
        direction: "vertical"
    };

    let thumbSlider = new Swiper(thumbsSelector, thumbOptions);
    let imageSlider = new Swiper(sliderSelector, slidesOptions);

    imageSlider.controller.control = thumbSlider;
    thumbSlider.controller.control = imageSlider;

    // Popup For Single Image
    $(".slider-item a").not('.swiper-slide-duplicate a').magnificPopup({
        type: "image",
        gallery: {
            enabled: true,
        }
    });

    console.log($(".slider-item a").not('.swiper-slide-duplicate a'));
    
};

const stickyTabs = () => {
    
    let $window = $(window);
    let $sidebar = $(".p-sidebar__item_sticky");
    let $sidebarHeight = $sidebar.innerHeight();
    let $footerOffsetTop = $(".property-page__cb-form").offset().top;
    let $sidebarOffset = $sidebar.offset();

    const stickyRun = () => {
        $window.scroll(function() {
            if ($window.scrollTop() + 140 >= $sidebarOffset.top) {
                $sidebar.addClass("fixed");
            } else {
                $sidebar.removeClass("fixed");
            }
            if ($window.scrollTop() + $sidebarHeight > $footerOffsetTop - 105) {
                $sidebar.css({
                    top: -(
                        $window.scrollTop() +
                        $sidebarHeight -
                        $footerOffsetTop -
                        55
                    )
                });
            } else {
                $sidebar.css({ top: "140px" });
            }
        });
    };
    if (window.innerWidth > 1024) {
        stickyRun();
    }

    $(window).on("resize", function() {
        if (window.innerWidth > 1024) {
            stickyRun();
        }
    });
};

const sideTeamCarousel = () => {
    let teamCarousel = document.querySelector('.sidebar__team');
    let teamList = document.querySelectorAll('.team-card_simple');

    const runOwl = () => {
        teamCarousel.classList.add('owl-carousel');

        $(".owl-carousel").owlCarousel({
            loop:false,
            margin: 40,
            nav:true,
            // center:true,
            responsive:{
                0:{
                    items:1,
                    
                },
                520:{
                    items:2
                },
            }
        });
    }
    
    $(window).on('resize', function(){
        if(window.innerWidth <= 991.98 && teamList.length >= 3){
            runOwl();

        } else if(window.innerWidth <= 991.98 && window.innerWidth > 768){
            teamCarousel.classList.add('sidebar__team_flex');         
        
        } else if(window.innerWidth <= 768 && teamList.length >= 3){
            teamCarousel.classList.remove('sidebar__team_flex');
            runOwl();     
        
        } else if(window.innerWidth <= 768 && window.innerWidth > 520){
            teamCarousel.classList.add('sidebar__team_flex'); 
            
        } else if(window.innerWidth <= 520 && teamList.length >= 2){
            teamCarousel.classList.remove('sidebar__team_flex');
            runOwl();

        } else if(window.innerWidth <= 520){
            teamCarousel.classList.add('sidebar__team_flex');       
        
        } else {
            
            $(".owl-carousel").trigger('destroy.owl.carousel');
            teamCarousel.classList.remove('owl-carousel');
            teamCarousel.classList.remove('sidebar__team_flex');
        }
    })  
}


