$(function () {
    hamburger();
    sideNav();
    mobileNavMenu();
    //   preventDefaultLinks();
    smoothScroll();
    themeSelect();
    // searchCollaps();
    searchFormPriceMask();
    searchFormTabs();
    svg4everybody();
    metaDropdown();
    scrollOutPlugin();
    toFavoritToggle();
    propertySLider();
    aosRun();
    testimonialSlider();
    scrollBar();
    videoPopup();
    scrollToTop();
    headerAnimation();
    //   filterTabsToggle();
    //   categoryLinksToggle();
    //   bgLinesResize();
    //   hamburgerToggle();
});

// Hamburger add Class 
const hamburger = () => {
    let hamburger = document.querySelector('.hamburger-icon');

    hamburger.addEventListener('click', () => {

        hamburger.classList.toggle('hamburger-icon_active');
    })  
}

// Side-Nav
const sideNav = () => {
    let ham = document.querySelector('.hamburger');
    let sidenav = document.querySelector('.side-nav');
    let header = document.querySelector('.mobile-header');

    ham.addEventListener('click', () => {
        sidenav.classList.toggle('side-nav_active');

        const headerSlide = () => {
            header.setAttribute("style", "transform: translateX(calc(100% - 60px));");
            document.body.style.overflow = 'hidden';
            
            
        }

        const headerNormal = () => {
            header.setAttribute("style", "transform: translateX(0);");
            document.body.style.overflow = 'auto';
            
        }

        
        (sidenav.classList.contains('side-nav_active')) ? headerSlide() : headerNormal();
    })
}

// Mobile Accordion Menu 
const mobileNavMenu = () => {
    
    let AccordionMenu = function(selector) {
        this.colMenu = document.querySelectorAll(`${selector} li`);
        let This = this;
        this.colMenu.forEach(function(items) {
            if (items.querySelector('ul')) {
                items.firstElementChild.classList.add('has-dropdown');
                // items.firstElementChild.insertAdjacentHTML('beforeend', '<svg class="mobile-menu__icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 451.847 451.847" xml:space="preserve"> <g> <path d="M225.923,354.706c-8.098,0-16.195-3.092-22.369-9.263L9.27,151.157c-12.359-12.359-12.359-32.397,0-44.751 c12.354-12.354,32.388-12.354,44.748,0l171.905,171.915l171.906-171.909c12.359-12.354,32.391-12.354,44.744,0 c12.365,12.354,12.365,32.392,0,44.751L248.292,345.449C242.115,351.621,234.018,354.706,225.923,354.706z"/> </g> </svg>');
    
                items.firstElementChild.onclick = function(e) {
                    e.preventDefault();
                    
                    let isTrue = this.parentElement.classList.toggle('open');
    
                    if (isTrue) {
                        This.show(this.nextElementSibling);
                    } else {
                        This.hide(this.nextElementSibling);
                    }
                }
            } 
        })
    }
    
    // Show an element
    AccordionMenu.prototype.show = function(elem) {
        // Get the natural height of the element
        var getHeight = function() {
            elem.style.display = 'block'; // Make it visible
            var height = elem.scrollHeight + 'px'; // Get it's height
            return height;
        };
    
        var height = getHeight(); // Get the natural height
        elem.style.height = height; // Update the height
        
        setTimeout(function() {
            elem.style.height = 'auto';
        }, 350);
    };
    
    // Hide an element
    AccordionMenu.prototype.hide = function(elem) {
        // Give the element a height to change from
        elem.style.height = elem.scrollHeight + 'px';
    
        // Set the height back to 0
        setTimeout(function() {
            elem.style.height = '0';
        }, 110);
    
        setTimeout(function() {
            elem.style.display = '';
        }, 700);
    };

    new AccordionMenu('.mobile-nav');
}

// SmoothScroll
const smoothScroll = () => {
    SmoothScroll({ stepSize: 60 });
};

// Custom Select's
const themeSelect = () => {
    $("select").niceSelect();
};

// Header Search

const searchCollaps = () => {
    let searchBtn = document.querySelector(".nav__search-btn");
    let searchCollaps = document.querySelector(".nav__search-collaps");
    let searchArea = document.querySelector(".nav__search-area");
    let serchIcon = document.querySelector(".nav__search-icon");
    let closeIcon = document.querySelector(".nav__close-icon");

    searchBtn.addEventListener("click", e => {
        // console.log(searchBtn);
        // console.log(searchCollaps.classList.value);
        // console.log(searchArea);

        if (searchCollaps.classList.contains("nav__search-collaps_disabled")) {
            searchCollaps.classList.remove("nav__search-collaps_disabled");
            searchArea.classList.remove("nav__search-area_disabled");
            serchIcon.style = "opacity: 0";
            closeIcon.style = "opacity: 1";
        } else {
            searchCollaps.classList.add("nav__search-collaps_disabled");
            searchArea.classList.add("nav__search-area_disabled");
            serchIcon.style = "opacity: 1";
            closeIcon.style = "opacity: 0";
        }

        e.preventDefault();
    });
};

// Search Form Price Mask
const searchFormPriceMask = () => {
    $(".search-form__input_price").mask("000 000 000", { reverse: true });
};

// Search Form Tabs
const searchFormTabs = () => {
    $(document).on("click", ".search-form__tab", function () {
        let tabName = $(this).attr("data-tab");

        $(".search-form__tab").removeClass("search-form__tab_current");
        $(".search-form__tab-content").removeClass(
            "search-form__tab-content_current"
        );

        $(this).addClass("search-form__tab_current");
        $(".search-form__tab-content_" + tabName).addClass(
            "search-form__tab-content_current"
        );
    });
};

// Meta Dropdown List
const metaDropdown = () => {
    $(document).on("click", ".meta-dropdown__button", function () {
        $(this)
            .parent()
            .toggleClass("meta-dropdown_opened");
    });

    $(document).on("click", ".meta-dropdown__list-item", function () {
        let html = $(this).html();
        $(".meta-dropdown__list-item").removeClass(
            "meta-dropdown__list-item_current"
        );
        $(this).addClass("meta-dropdown__list-item_current");
        $(this)
            .parent()
            .parent()
            .prev()
            .html(html);
        $(".meta-dropdown").removeClass("meta-dropdown_opened");
    });

    $("body").on("click", function (event) {
        if (!$(event.target).is(".meta-dropdown__list")) {
            $(".meta-dropdown").removeClass("meta-dropdown_opened");
        }
    });
};

// Scroll Out Plugin Run
const scrollOutPlugin = () => {
    if (window.matchMedia("(min-width:992px)").matches) {
        ScrollOut({
            // onShown(el) {
            //     el.classList.add("animated");
            // }
            once: true,
            threshold: 0.3
        });
    }
};

// Add To Favorit Button Toggle
const toFavoritToggle = () => {
    $(".to-favorit__button").on("click", function () {
        $(this).toggleClass("to-favorit__button_active");
    });
};

// Property Slider
const propertySLider = () => {
    let bestsellerSLider;
    let newPropertySlider;

    bestsellerSLider = new Swiper(".property-slider__bestseller", {
        wrapperClass: "property-slider__body",
        slideClass: "property-slider__slide",
        // loop: true,
        speed: 600,
        slidesPerView: "auto",
        spaceBetween: 30,
        threshold: 10,

        navigation: {
            nextEl: ".property-slider__button-next",
            prevEl: ".property-slider__button-prev"
        },

        scrollbar: {
            el: ".property-slider__scrollbar",
            draggable: true
        },

        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 60
            },

            767: {
                slidesPerView: 2,
                spaceBetween: 30
            },

            991: {
                slidesPerView: 3
            }
        }
    });

    newPropertySlider = new Swiper(".property-slider__newPropertys", {
        wrapperClass: "property-slider__body",
        slideClass: "property-slider__slide",
        // loop: true,
        speed: 600,
        slidesPerView: "auto",
        spaceBetween: 30,
        threshold: 10,

        navigation: {
            nextEl: ".property-slider__button-next",
            prevEl: ".property-slider__button-prev"
        },

        scrollbar: {
            el: ".property-slider__scrollbar",
            draggable: true
        },

        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 60
            },

            767: {
                slidesPerView: 2,
                spaceBetween: 30
            },

            991: {
                slidesPerView: 3
            }
        }
    });
};

const aosRun = () => {
    AOS.init({
        disable: "mobile",
        offset: 140,
        duration: 800,
        once: true
    });
};

const testimonialSlider = () => {
    let testimonialSlider = new Swiper(".swiper-container", {
        // wrapperClass: "testimonialSlider__container",
        // slideClass: "testimonialSlider__slide",
        // loop: true,
        speed: 600,
        slidesPerView: "auto",
        spaceBetween: 30,
        threshold: 10,
        effect: "fade",
        allowTouchMove: false,

        navigation: {
            nextEl: ".testimonialSlider__button-next",
            prevEl: ".testimonialSlider__button-prev"
        },

        fadeEffect: {
            crossFade: true
        }
    });

    // Add 'current' class when slide is changed
    testimonialSlider.on("slideChange", function () {
        let slideThumb = $(".testimonialSlider-thumbs__list-item");
        let currentIndex = testimonialSlider.activeIndex;

        slideThumb.removeClass("testimonialSlider-thumbs__list-item_current");
        slideThumb
            .eq(currentIndex)
            .addClass("testimonialSlider-thumbs__list-item_current");
    });

    // Change Slide when user click on Thumb
    $(document).on("click", ".testimonialSlider-thumbs__list-item", function () {
        let slideThumb = $(".testimonialSlider-thumbs__list-item");
        let current = slideThumb.index(this);

        slideThumb.removeClass("testimonialSlider-thumbs__list-item_current");
        $(this).addClass("testimonialSlider-thumbs__list-item_current");

        testimonialSlider.slideTo(current);
    });
};

// Custom Scrollbar
const scrollBar = () => {
    new SimpleBar(document.querySelector(".testimonialSlider__message-inner"), {
        autoHide: false
    });

    // console.log(1);
};

// Video Section Popups
const videoPopup = () => {
    $(".video-section__link").magnificPopup({
        type: "iframe",
        iframe: {
            patterns: {
                youtube: {
                    index: "youtube.com/",
                    id: function (url) {
                        var m = url.match(/[\\?\\&]v=([^\\?\\&]+)/);
                        if (!m || !m[1]) return null;
                        return m[1];
                    },
                    src: "//www.youtube.com/embed/%id%?autoplay=1"
                },
                vimeo: {
                    index: "vimeo.com/",
                    id: function (url) {
                        var m = url.match(
                            /(https?:\/\/)?(www.)?(player.)?vimeo.com\/([a-z]*\/)*([0-9]{6,11})[?]?.*/
                        );
                        if (!m || !m[5]) return null;
                        return m[5];
                    },
                    src: "//player.vimeo.com/video/%id%?autoplay=1"
                }
            }
        }
    });
};

// Scroll To Top Button
const scrollToTop = () => {
    let toTopBtn = $(".scroll-to-top");

    $(window).scroll(function () {
        if ($(window).scrollTop() > 1000) {
            toTopBtn.addClass("scroll-to-top_show");
        } else {
            toTopBtn.removeClass("scroll-to-top_show");
        }
    });

    toTopBtn.on("click", function () {
        $("html, body").animate({ scrollTop: 0 }, 1000);
    });   
};

// Header OnScroll Animation
const headerAnimation = () => {
    const header = document.querySelector('.site__header');
    const headerShow = 'header_show';
    const headerHide = 'header_hide';
    let lastOffset = 0;

    window.addEventListener('scroll', () => {
        let currOffset = window.scrollY;

        if(currOffset > lastOffset && lastOffset != 0 ) {
            header.classList.add(headerHide);
            header.classList.remove(headerShow);
            
        } else {
            header.classList.add(headerShow);
            header.classList.remove(headerHide);        
        }

        lastOffset = currOffset;
    })   
}


// // Prevent Defult for all 'a' tag's
// const preventDefaultLinks = () => {

//   const prventLinks = document.querySelectorAll('a');

//   for(let i = 0; i < prventLinks.length; i++){

//     prventLinks[i].addEventListener('click', function(e){

//       e.preventDefault();

//     })

//   }
// }

// // Toggle for Filter Tabs
// const filterTabsToggle = () => {

//   const tabs = document.querySelectorAll('.filter-tab');

//   function toggle(tab){

//     for(let i = 0; i < tab.length; i++){

//       tab[i].addEventListener('click', function(e){

//         let currentTab = this;

//         for(let i = 0; i < tab.length; i++){

//           if(currentTab == tab[i]){
//             currentTab.classList.add('filter-tab--active')
//           }else{
//             tab[i].classList.remove('filter-tab--active')
//           }

//         }

//         e.preventDefault();
//       })

//     }

//   }
//   toggle(tabs);

// }

// // Toggle Class for Category List Links
// const categoryLinksToggle = () => {

//   const catLinks = document.querySelectorAll('.category-list__link');

//   for(let i = 0; i < catLinks.length; i++ ){

//     catLinks[i].addEventListener('click', function(e){

//       const currentLink = this;

//       for(let i = 0; i < catLinks.length; i++ ){

//         if(currentLink != catLinks[i]){
//           catLinks[i].classList.remove('category-list__link--active')
//         } else {
//           currentLink.classList.add('category-list__link--active')
//         }

//       }

//       e.preventDefault();
//     })
//   }
// }

// // Header Sticky + Add Class

// // window.onscroll = () => { sticky() };

// // let stickyHeader = document.querySelector('.site__header');
// // let paddingTop = document.querySelector('.site');

// // function sticky() {
// //   if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0){
// //     stickyHeader.classList.add('site__header--sticky');
// //     paddingTop.style.paddingTop = '120px';
// //   } else {
// //     stickyHeader.classList.remove('site__header--sticky');
// //     paddingTop.style.paddingTop = '0';
// //   }
// // };

// // Background Lines Grig Risize
// const bgLinesResize = () => {

//   (function() {
//     var throttle = function(type, name, obj) {
//         obj = obj || window;
//         var running = false;
//         var func = function() {
//             if (running) { return; }
//             running = true;
//             requestAnimationFrame(function() {
//                 obj.dispatchEvent(new CustomEvent(name));
//                 running = false;
//             });
//         };
//         obj.addEventListener(type, func);
//     };

//     throttle("resize", "optimizedResize");
//   })();

//   window.addEventListener("optimizedResize", function() {

//     // call function background resize
//     bgLinesResize();

//   });

//   const bgLinesResize = () => {
//     const firstBgLine = document.querySelector('.bg-lines>span');
//     const container = document.querySelector('main .container');
//     const containerWidth = container.clientWidth;
//     const windowWidth = document.body.clientWidth;

//     let bgLineMargin = 0;

//     if(windowWidth <= 1920 &&  windowWidth >= 1500){
//       bgLineMargin = ((windowWidth - containerWidth)/2) - 192;

//     } else {
//       bgLineMargin = ((windowWidth - containerWidth)/2)-1;
//     }

//     // bgLineMargin = (windowWidth - containerWidth)/2;

//     firstBgLine.style.marginLeft = Math.floor(bgLineMargin) + 'px';

//   }

//   bgLinesResize();
// };

// // Hanburger Toggle
// const hamburgerToggle = () => {

//   const hamburger = document.querySelector('.mobile-header__hamburger');

//   hamburger.addEventListener('click', function(){

//     hamburger.classList.toggle('mobile-header__hamburger--active');

//   })

// };
