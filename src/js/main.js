$(function() {
    hamburger();
    sideNav();
    mobileNavMenu();
    smoothScroll();
    themeSelect();
    searchFormPriceMask();
    searchFormTabs();
    svg4everybody();
    metaDropdown();
    scrollOutPlugin();
    toFavoritToggle();
    propertySLider();
    aosRun();
    testimonialSlider();
    videoPopup();
    scrollToTop();
    headerAnimation();
    pagination();
    paralaxBg();
    categoriesToggle();
    anchorToggle();
    formValidation();
    phoneFomMask();
    iframeRatio();
    popupsRun();
    textareaAutoHeight();
});

// Hamburger add Class
const hamburger = () => {
    let hamburger = document.querySelector(".hamburger-icon");

    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("hamburger-icon_active");
    });
};

// Side-Nav
const sideNav = () => {
    let ham = document.querySelector(".hamburger");
    let sidenav = document.querySelector(".side-nav");
    let header = document.querySelector(".mobile-header");
    let main = document.querySelector("main");

    ham.addEventListener("click", () => {
        sidenav.classList.toggle("side-nav_active");

        const headerSlide = () => {
            header.setAttribute(
                "style",
                "transform: translateX(calc(100% - 60px));"
            );

            // document.body.classList.add('body__side-nav');
            document.body.style.overflow = "hidden";
        };

        const headerNormal = () => {
            header.setAttribute("style", "transform: translateX(0);");
            // document.body.classList.remove('body__side-nav');
            document.body.style.overflow = "auto";
        };

        sidenav.classList.contains("side-nav_active")
            ? headerSlide()
            : headerNormal();
    });
};

// Mobile Accordion Menu
const mobileNavMenu = () => {
    let AccordionMenu = function(selector) {
        this.colMenu = document.querySelectorAll(`${selector} li`);
        let This = this;
        this.colMenu.forEach(function(items) {
            if (items.querySelector("ul")) {
                items.firstElementChild.classList.add("has-dropdown");
                // items.firstElementChild.insertAdjacentHTML('beforeend', '<svg class="mobile-menu__icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 451.847 451.847" xml:space="preserve"> <g> <path d="M225.923,354.706c-8.098,0-16.195-3.092-22.369-9.263L9.27,151.157c-12.359-12.359-12.359-32.397,0-44.751 c12.354-12.354,32.388-12.354,44.748,0l171.905,171.915l171.906-171.909c12.359-12.354,32.391-12.354,44.744,0 c12.365,12.354,12.365,32.392,0,44.751L248.292,345.449C242.115,351.621,234.018,354.706,225.923,354.706z"/> </g> </svg>');

                items.firstElementChild.onclick = function(e) {
                    e.preventDefault();

                    let isTrue = this.parentElement.classList.toggle("open");

                    if (isTrue) {
                        This.show(this.nextElementSibling);
                    } else {
                        This.hide(this.nextElementSibling);
                    }
                };
            }
        });
    };

    // Show an element
    AccordionMenu.prototype.show = function(elem) {
        // Get the natural height of the element
        var getHeight = function() {
            elem.style.display = "block"; // Make it visible
            var height = elem.scrollHeight + "px"; // Get it's height
            return height;
        };

        var height = getHeight(); // Get the natural height
        elem.style.height = height; // Update the height

        setTimeout(function() {
            elem.style.height = "auto";
        }, 350);
    };

    // Hide an element
    AccordionMenu.prototype.hide = function(elem) {
        // Give the element a height to change from
        elem.style.height = elem.scrollHeight + "px";

        // Set the height back to 0
        setTimeout(function() {
            elem.style.height = "0";
        }, 110);

        setTimeout(function() {
            elem.style.display = "";
        }, 700);
    };

    new AccordionMenu(".mobile-nav");
};

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
    $(document).on("click", ".search-form__tab", function() {
        let tabName = $(this).attr("data-tab");

        $(".search-form__tab").removeClass("search-form__tab_current");
        // $(".search-form__tab-content").removeClass(
        //     "search-form__tab-content_current"
        // );

        $(this).addClass("search-form__tab_current");
        // $(".search-form__tab-content_" + tabName).addClass(
        //     "search-form__tab-content_current"
        // );
    });
};

// Meta Dropdown List
const metaDropdown = () => {
    $(document).on("click", ".meta-dropdown__button", function() {
        $(this)
            .parent()
            .toggleClass("meta-dropdown_opened");
    });

    $(document).on("click", ".meta-dropdown__list-item", function() {
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

    $("body").on("click", function(event) {
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
    $(".to-favorit__button").on("click", function() {
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
        roundLengths: true,

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
                slidesPerView: 2,
                spaceBetween: 70
            },

            1200: {
                slidesPerView: 3,
                spaceBetween: 30
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
        roundLengths: true,

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
                slidesPerView: 2,
                spaceBetween: 70
            },

            1200: {
                slidesPerView: 3,
                spaceBetween: 30
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
    testimonialSlider.on("slideChange", function() {
        let slideThumb = $(".testimonialSlider-thumbs__list-item");
        let currentIndex = testimonialSlider.activeIndex;

        slideThumb.removeClass("testimonialSlider-thumbs__list-item_current");
        slideThumb
            .eq(currentIndex)
            .addClass("testimonialSlider-thumbs__list-item_current");
    });

    // Change Slide when user click on Thumb
    $(document).on("click", ".testimonialSlider-thumbs__list-item", function() {
        let slideThumb = $(".testimonialSlider-thumbs__list-item");
        let current = slideThumb.index(this);

        slideThumb.removeClass("testimonialSlider-thumbs__list-item_current");
        $(this).addClass("testimonialSlider-thumbs__list-item_current");

        testimonialSlider.slideTo(current);
    });
};

// Video Section Popups
const videoPopup = () => {
    $(".video-section__link").magnificPopup({
        type: "iframe",
        iframe: {
            patterns: {
                youtube: {
                    index: "youtube.com/",
                    id: function(url) {
                        var m = url.match(/[\\?\\&]v=([^\\?\\&]+)/);
                        if (!m || !m[1]) return null;
                        return m[1];
                    },
                    src: "//www.youtube.com/embed/%id%?autoplay=1"
                },
                vimeo: {
                    index: "vimeo.com/",
                    id: function(url) {
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

    $(window).scroll(function() {
        if ($(window).scrollTop() > 1000) {
            toTopBtn.addClass("scroll-to-top_show");
        } else {
            toTopBtn.removeClass("scroll-to-top_show");
        }
    });

    toTopBtn.on("click", function() {
        $("html, body").animate({ scrollTop: 0 }, 1000);
    });

    // bottom position + 15% when scroll to bottom of content
    $(window).scroll(function() {
        const btnPostition = bottom => {
            if (
                $(window).scrollTop() + $(window).height() + 50 >
                $(document).height()
            ) {
                toTopBtn.css("bottom", bottom);
            } else {
                toTopBtn.css("bottom", "5%");
            }
        };

        window.innerWidth > 768 ? btnPostition("115px") : false;
        window.innerWidth <= 330 ? btnPostition("175px") : false;
    });
};

// Header OnScroll Animation
const headerAnimation = () => {
    const header = document.querySelector(".site__header");
    const headerShow = "header_show";
    const headerHide = "header_hide";
    let lastOffset = 0;

    window.addEventListener("scroll", () => {
        let currOffset = window.pageYOffset;

        if (currOffset > lastOffset && lastOffset != 0) {
            header.classList.add(headerHide);
            header.classList.remove(headerShow);
        } else {
            header.classList.add(headerShow);
            header.classList.remove(headerHide);
        }

        lastOffset = currOffset;
    });
};

// Pagination
const pagination = () => {
    (function() {
        /*global Modernizr:true */
        "use strict";
        (function($) {
            $.fn.extend({
                mgPgnation: function(options) {
                    /* func :: calculate width of each page num */
                    /* func :: draw magic line */
                    /* func :: update prev text */
                    var $curNav,
                        $magicLine,
                        $magicNav,
                        $mainNav,
                        $nextNav,
                        $pgnNav,
                        $prevNav,
                        $prevNavText,
                        $this,
                        calPgnWidth,
                        magicDraw,
                        prevNavWidth,
                        prevText,
                        showPrevNext,
                        updatePrevText;
                    $this = $(this);
                    if ($this.length) {
                        $mainNav = this.children();
                        $pgnNav = $this.find(".pagination__item");
                        $curNav = $this.find(".current");
                        $magicNav = $this.find("a");
                        $prevNav = $this.find(".pagination__prev");
                        $nextNav = $this.find(".pagination__next");
                        $prevNavText = $prevNav.find(".pagination__prev-txt");
                        updatePrevText = function() {
                            $prevNavText = $prevNav.find(
                                ".pagination__prev-txt"
                            );
                            return $prevNavText.html("Prev");
                        };
                        calPgnWidth = function() {
                            var pgnWidth, prevWidth, vsbNav, vsbNavs;
                            // number of visible <a> plus <strong class="current">
                            vsbNav =
                                $this.find(".pagination__item a:visible")
                                    .length + 1;
                            vsbNavs = vsbNav + 2;
                            prevWidth = 100 / vsbNavs;
                            pgnWidth = 100 - prevWidth * 2;
                            $prevNav.css("width", prevWidth + "%");
                            $nextNav.css("width", prevWidth + "%");
                            $pgnNav.css("width", pgnWidth + "%");
                            // <a> and <strong>
                            return $pgnNav
                                .find("a, strong")
                                .css("width", 100 / vsbNav + "%");
                        };
                        /* func :: calculate and display prev/next */
                        // 85px - display full text
                        showPrevNext = function() {
                            var prevNavWidth;
                            prevNavWidth = $prevNav.innerWidth();
                            if (prevNavWidth > 100) {
                                $this.addClass("fullprevnext");
                                // display Previous
                                return $prevNavText.html("Previous");
                            } else if (
                                prevNavWidth < 101 &&
                                prevNavWidth > 60
                            ) {
                                $this.addClass("fullprevnext");
                                // display Prev
                                return $prevNavText.html("Prev");
                            } else {
                                return $this.removeClass("fullprevnext");
                            }
                        };
                        magicDraw = function() {
                            // draw init magic line
                            $magicLine.width($curNav.width());
                            if ($curNav.position() !== void 0) {
                                $magicLine.css("left", $curNav.position().left);
                            }

                            // assign orig values
                            $magicLine.data(
                                "origLeft",
                                $magicLine.position().left
                            );
                            return $magicLine.data(
                                "origWidth",
                                $magicLine.width()
                            );
                        };
                        // END funcs

                        // create magic line
                        $mainNav.append('<li class="pagination__magic-line">');

                        // declare magic line
                        $magicLine = $this.find(".pagination__magic-line");
                        // add extra class & element if no prev or next
                        prevNavWidth = $prevNav.innerWidth();
                        if (prevNavWidth > 100) {
                            prevText = "Previous";
                        } else {
                            prevText = "Prev";
                        }
                        if (!$prevNav.children().length) {
                            $prevNav.addClass("disabled");
                            $prevNav.append(
                                '<a rel="prev"><i class="pagination__prev-icon icon-angle-left"></i><span class="pagination__prev-txt">' +
                                    prevText +
                                    "</span></a>"
                            );
                        }
                        if (!$nextNav.children().length) {
                            $nextNav.addClass("disabled");
                            $nextNav.append(
                                '<a rel="next"><i class="pagination__next-icon icon-angle-right"></i><span class="pagination__next-txt">Next</span></a>'
                            );
                        }
                        // calculate pagination width
                        calPgnWidth();
                        // show prev/next
                        showPrevNext();
                        // draw magic line
                        magicDraw();

                        // when hover
                        $magicNav.hover(
                            function() {
                                var $el, leftPos, newWidth;
                                $el = $(this);
                                leftPos = $el.position().left;
                                newWidth = $el.width();

                                // animate magic line
                                return $magicLine.stop().animate({
                                    left: leftPos,
                                    width: newWidth
                                });
                            },
                            function() {
                                return $magicLine.stop().animate({
                                    left: $magicLine.data("origLeft"),
                                    width: $magicLine.data("origWidth")
                                });
                            }
                        );
                        /* Window Resize Changes */
                        return window.addEventListener("resize", function() {
                            updatePrevText();
                            calPgnWidth();
                            showPrevNext();
                            return magicDraw();
                        });
                    }
                }
            });

            // END mgPgnation()

            // call function here
            return $(".pagination").mgPgnation();
        })(jQuery);
    }.call(this));
};

// Paralax Background
const paralaxBg = () => {
    if (window.innerWidth >= 1025) {
        $(".parallax-bg").parallaxie({
            speed: 0.3,
            size: "auto"
            // offset: -25
        });
    }
};

// Blog List Categories Toggle
const categoriesToggle = () => {
    $(document).on("click", ".posts-categories__item", function() {
        let $this = $(this);

        $this
            .addClass("posts-categories__item_active")
            .siblings()
            .removeClass("posts-categories__item_active");
    });
};

// IFrame Ratio Scale
const iframeRatio = () => {
    // Find all iframes
    var $iframes = $(".typography iframe");

    // Find &amp;amp;#x26; save the aspect ratio for all iframes
    $iframes.each(function() {
        $(this)
            .data("ratio", this.height / this.width)
            // Remove the hardcoded width &amp;amp;#x26; height attributes
            .removeAttr("width")
            .removeAttr("height");
    });

    // Resize the iframes when the window is resized
    $(window)
        .resize(function() {
            $iframes.each(function() {
                // Get the parent container&amp;amp;#x27;s width
                var width = $(this)
                    .parent()
                    .width();

                $(this)
                    .width(width)
                    .height(width * $(this).data("ratio"));
            });
            // Resize to fix all iframes on page load.
        })
        .resize();
};

// Single Property Page Anchor Button Toggle & Slide
const anchorToggle = () => {
    $(document).on("click", ".button__anchor", function(e) {
        // e.preventDefault();
        $(this)
            .addClass("button__anchor_active")
            .siblings()
            .removeClass("button__anchor_active");
    });

    // Slide to Anchor
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (
            location.pathname.replace(/^\//, "") ===
                this.pathname.replace(/^\//, "") &&
            location.hostname === this.hostname
        ) {
            var target = $(this.hash);
            target = target.length
                ? target
                : $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                $("html, body").animate(
                    {
                        scrollTop: target.offset().top - 160
                    },
                    800
                );
                return false;
            }
        }
    });
};

// Form Validation
const formValidation = () => {
    $(".cb-form__body").validate({
        errorClass: "form__error",

        rules: {
            name: {
                required: true
            },
            email: {
                email: true
            },
            phone: {
                required: true,
                minlength: 10
            }
        },

        messages: {
            name: {
                required: "Введите ваше Имя"
            },
            email: {
                email: "Пожалуйста введите корректный почтовый адрес",
            },
            phone: {
                required: "Введите ваш номер телефона",
                minlength: "Минимальное количество символов - 10"
            }
        }
    });

    
};

// Phone Form Mask
const phoneFomMask = () => {
    $(".phone-mask").mask("(000) 000-00-00");
};

// Popup's Run
const popupsRun = () => {
    $('.js-open-popup').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#username',
        modal: true,
        
        callbacks: {
			open: function() {
				$('.mfp-bg').css({
                    'background': '#e8f7ff',
                    'opacity': '1',
                });

                let validator = $(".popup__form").validate({
                    errorClass: "form__error",
            
                    rules: {
                        name: {
                            required: true,
                            minlength: 3
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        phone: {
                            required: true,
                            minlength: 10
                        }
                    },
            
                    messages: {
                        name: {
                            required: "Введите ваше Имя",
                            minlength: "Минимальное количество символов - 3"
                        },
                        email: {
                            required: "Введите ваш email",
                            email: "Пожалуйста введите корректный почтовый адрес",
                        },
                        phone: {
                            required: "Введите ваш номер телефона",
                            minlength: "Минимальное количество символов - 10"
                        }
                    }
                });
            },
            
		}
	});
	$(document).on('click', '.popup__close', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
    });

} 

// Textarea Auto Height
const textareaAutoHeight = () => {

    $('.js-textarea-auto-height').on('input', function () { 
        this.style.height = 'auto'; 
          
        this.style.height =  
                (this.scrollHeight) + 'px'; 
    }); 
} 

// Detect IOS
// const iOSDetect = () => {
//     var isMobile = {
//         Android: function() {
//             return navigator.userAgent.match(/Android/i);
//         },
//         BlackBerry: function() {
//             return navigator.userAgent.match(/BlackBerry/i);
//         },
//         iOS: function() {
//             return navigator.userAgent.match(/iPhone|iPad|iPod/i);
//         },
//         Opera: function() {
//             return navigator.userAgent.match(/Opera Mini/i);
//         },
//         Windows: function() {
//             return navigator.userAgent.match(/IEMobile/i);
//         },
//         any: function() {
//             return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
//         }
//     };

//     /* if the device is not ios hide the download button */
//     if(!isMobile.iOS()){
//         alert('not-ios');
//     } else {
//         alert('ios')
//     }
//     console.log(1);

// }
