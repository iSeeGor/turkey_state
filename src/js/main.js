$(function() {
    // Sliders & Carousels
    testimonialSlider();
    propertySLider();


    // Scroll and etc.
    pageSmoothScrolling();
    scrollOutPlugin();
    scrollToTop();
    anchorScroll();


    // Animation
    aosRun();
    headerAnimation();
    paralaxBg();


    // Forms, Validators, Mask's, etc.
    searchFormPriceMask(); 
    formValidation();
    phoneFormMask();
    textareaAutoHeight();


    // Buttons & Toggles
    toFavoritToggle();
    categoriesToggle();
    searchFormTabs();

    
    // Select, Radio, Checkbox, Dropdowns
    metaDropdown();
    themeSelect();
    
    
    // Popup's
    videoPopup();
    popupsRun();
    popupAutoRun();

    
    // Other
    pagination();


    // Utils
    svg4everybody();
    iframeRatio();


    // Mobile
    hamburger();
    sideNav();
    mobileNavMenu();
});

/* Sliders & Carousels */
const testimonialSlider = () => {

    let slider = '';
    let sliderClass = '.swiper-container';
    let sliderOptions = {};

    sliderOptions = {
        speed: 600,
        slidesPerView: 'auto',
        spaceBetween: 30,
        threshold: 10,
        effect: 'fade',
        allowTouchMove: false,

        navigation: {
            nextEl: '.testimonialSlider__button-next',
            prevEl: '.testimonialSlider__button-prev'
        },

        fadeEffect: {
            crossFade: true
        }
    };

    slider = new Swiper(sliderClass, sliderOptions);

    // // Add 'current' class when slide is changed
    let sliderThumb = $('.testimonialSlider-thumbs__list-item');
    let curentClass = 'testimonialSlider-thumbs__list-item_current';
    

    slider.on('slideChange', function () {
        let currentIndex = slider.activeIndex;
        sliderThumb.removeClass(curentClass);
        sliderThumb.eq(currentIndex).addClass(curentClass);
    });

    // Change Slide when user click on Thumb
    sliderThumb.on('click', function ()  {
        let current = sliderThumb.index(this);
        sliderThumb.removeClass(curentClass);
        $(this).addClass(curentClass);

        slider.slideTo(current);
    });

};
const propertySLider = () => {
    let bestsellerSLider;
    let newPropertySlider;

    bestsellerSLider = new Swiper('.property-slider__bestseller', {
        wrapperClass: 'property-slider__body',
        slideClass: 'property-slider__slide',
        // loop: true,
        speed: 600,
        slidesPerView: 'auto',
        spaceBetween: 30,
        threshold: 10,
        roundLengths: true,

        navigation: {
            nextEl: '.property-slider__button-next',
            prevEl: '.property-slider__button-prev'
        },

        scrollbar: {
            el: '.property-slider__scrollbar',
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

    newPropertySlider = new Swiper('.property-slider__newPropertys', {
        wrapperClass: 'property-slider__body',
        slideClass: 'property-slider__slide',
        // loop: true,
        speed: 600,
        slidesPerView: 'auto',
        spaceBetween: 30,
        threshold: 10,
        roundLengths: true,

        navigation: {
            nextEl: '.property-slider__button-next',
            prevEl: '.property-slider__button-prev'
        },

        scrollbar: {
            el: '.property-slider__scrollbar',
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


/* Scroll Anchors and etc. */
const pageSmoothScrolling = () => {
    SmoothScroll({
        stepSize: 60
    });
};
const scrollToTop = () => {
    let toTopBtn = $('.js-scroll-to-top');

    function showHideBtn() {
        if ($(window).scrollTop() > 1000) {
            toTopBtn.addClass('scroll-to-top_show');
        } else {
            toTopBtn.removeClass('scroll-to-top_show');
        }
    }

    function btnPostition(bottom) {
        if (
            $(window).scrollTop() + $(window).height() + 50 >
            $(document).height()
        ) {
            toTopBtn.css('bottom', bottom);
        } else {
            toTopBtn.css('bottom', '5%');
        }
    }

    $(window).scroll(function() {
        showHideBtn();

        window.innerWidth > 768 ? btnPostition('115px') : false;
        window.innerWidth <= 330 ? btnPostition('175px') : false;
    });

    $(document).on('click', '.js-scroll-to-top', () => {
        $('html, body').animate({ scrollTop: 0 }, 1000);
    });
};
const scrollOutPlugin = () => {
    if (window.innerWidth >= 992) {
        ScrollOut({
            once: true,
            threshold: 0.3
        });
    }  
};
const anchorScroll = () => {

    $('a[href*="#"]:not([href="#"])').click(function() {
        if (
            location.pathname.replace(/^\//, '') ===
                this.pathname.replace(/^\//, '') &&
            location.hostname === this.hostname
        ) {
            let target = $(this.hash);
            target = target.length
                ? target
                : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate(
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


/* Animation */
const aosRun = () => {
    AOS.init({
        disable: 'mobile',
        offset: 140,
        duration: 800,
        once: true
    });
};
const headerAnimation = () => {
    let header = document.querySelector('.site__header');
    let headerShow = 'header_show';
    let headerHide = 'header_hide';
    let lastOffset = 0;

    window.addEventListener('scroll', () => {
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
const paralaxBg = () => {

    if (window.innerWidth >= 1025) {
        $('.parallax-bg').parallaxie({
            speed: 0.3,
            size: 'auto'
            // offset: -25
        });
    }
};


/* Forms, Validators, Mask's, etc. */
const searchFormPriceMask = () => {
    $('.search-form__input_price').mask('000 000 000', { reverse: true });
};
const formValidation = () => {
    $('.cb-form__body').validate({
        errorClass: 'form__error',

        rules: {
            name: {
                required: true,
                minlength: 3
            },
            email: {
                email: true,
                required: true,
            },
            phone: {
                required: true,
                minlength: 10
            }
        },

        messages: {
            name: {
                required: 'Введите ваше Имя',
                minlength: 'Минимальное количество символов - 3'
            },
            email: {
                email: 'Пожалуйста введите корректный почтовый адрес',
                required: 'Введите ваш Email',
            },
            phone: {
                required: 'Введите ваш номер телефона',
                minlength: 'Минимальное количество символов - 10'
            }
        }
    });
};
const phoneFormMask = () => {
    $('.phone-mask').mask('(000) 000-00-00');
};
const textareaAutoHeight = () => {
    $('.js-textarea-auto-height').on('input', function() {
        this.style.height = 'auto';

        this.style.height = this.scrollHeight + 'px';
    });
};


/* Buttons & Toggles */
const toFavoritToggle = () => {
    $('.to-favorit__button').on('click', function() {
        $(this).toggleClass('to-favorit__button_active');
    });
};
const categoriesToggle = () => {
    $(document).on('click', '.posts-categories__item', function() {
        let $this = $(this);

        $this
            .addClass('posts-categories__item_active')
            .siblings()
            .removeClass('posts-categories__item_active');
    });
};
const searchFormTabs = () => {
    $(document).on('click', '.search-form__tab', function() {

        $('.search-form__tab').removeClass('search-form__tab_current');

        $(this).addClass('search-form__tab_current');

    });
};


/* Select, Radio, Checkbox, Dropdowns */
const metaDropdown = () => {
    $(document).on('click', '.meta-dropdown__button', function() {
        $(this)
            .parent()
            .toggleClass('meta-dropdown_opened');
    });

    $(document).on('click', '.meta-dropdown__list-item', function() {
        let html = $(this).html();
        $('.meta-dropdown__list-item').removeClass(
            'meta-dropdown__list-item_current'
        );
        $(this).addClass('meta-dropdown__list-item_current');
        $(this)
            .parent()
            .parent()
            .prev()
            .html(html);
        $('.meta-dropdown').removeClass('meta-dropdown_opened');
    });

    $('body').on('click', function(event) {
        if (!$(event.target).is('.meta-dropdown__list')) {
            $('.meta-dropdown').removeClass('meta-dropdown_opened');
        }
    });
};
const themeSelect = () => {
    $('select').niceSelect();
};


/* Popup's */ 
const videoPopup = () => {
    $('.video-section__link').magnificPopup({
        type: 'iframe',
        iframe: {
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: function(url) {
                        var m = url.match(/[\\?\\&]v=([^\\?\\&]+)/);
                        if (!m || !m[1]) return null;
                        return m[1];
                    },
                    src: '//www.youtube.com/embed/%id%?autoplay=1'
                },
                vimeo: {
                    index: 'vimeo.com/',
                    id: function(url) {
                        var m = url.match(
                            /(https?:\/\/)?(www.)?(player.)?vimeo.com\/([a-z]*\/)*([0-9]{6,11})[?]?.*/
                        );
                        if (!m || !m[5]) return null;
                        return m[5];
                    },
                    src: '//player.vimeo.com/video/%id%?autoplay=1'
                }
            }
        }
    });
};
const popupsRun = () => {
    $('.js-open-popup').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#username',
        modal: true,

        callbacks: {
            open: function() {
                $('.mfp-bg').css({
                    background: '#e8f7ff',
                    opacity: '1'
                });

                let validator = $('.popup__form').validate({
                    errorClass: 'form__error',

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
                            required: 'Введите ваше Имя',
                            minlength: 'Минимальное количество символов - 3'
                        },
                        email: {
                            required: 'Введите ваш email',
                            email:
                                'Пожалуйста введите корректный почтовый адрес'
                        },
                        phone: {
                            required: 'Введите ваш номер телефона',
                            minlength: 'Минимальное количество символов - 10'
                        }
                    }
                });
            },
            close: function() {
                $('.mfp-bg').css({
                    background: '#0b0b0b',
                    opacity: '0.8'
                });
            }
        }
    });
    $(document).on('click', '.popup__close', function(e) {
        e.preventDefault();
        $.magnificPopup.close();
    });
};
const popupAutoRun = () => {
    let check_cookie = $.cookie('mfp-fire');

    let cookieMin = 10;
    let timeoutMs = 2000;

    if (check_cookie == undefined) {
        let date = new Date();
        date.setTime(new Date().getTime() + cookieMin * 60 * 1000);

        $.cookie('mfp-fire', 'yes', { expires: date });

        let runPopup = () => {
            $.magnificPopup.open({
                items: { src: '#popup__stock' },
                type: 'inline',
                preloader: false,
                focus: '#username',
                modal: true,

                callbacks: {
                    open: function() {
                        $('.mfp-bg').css({
                            background: '#e8f7ff',
                            opacity: '1'
                        });

                        let validator = $('.popup__form').validate({
                            errorClass: 'form__error',

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
                                    required: 'Введите ваше Имя',
                                    minlength:
                                        'Минимальное количество символов - 3'
                                },
                                email: {
                                    required: 'Введите ваш email',
                                    email:
                                        'Пожалуйста введите корректный почтовый адрес'
                                },
                                phone: {
                                    required: 'Введите ваш номер телефона',
                                    minlength:
                                        'Минимальное количество символов - 10'
                                }
                            }
                        });
                    },
                    close: function() {
                        $('.mfp-bg').css({
                            background: '#0b0b0b',
                            opacity: '0.8'
                        });
                    }
                }
            });
        };

        setTimeout(runPopup, timeoutMs);
    }
};


/* Other */ 
const pagination = () => {
    (function() {
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
                        $pgnNav = $this.find('.pagination__item');
                        $curNav = $this.find('.current');
                        $magicNav = $this.find('a');
                        $prevNav = $this.find('.pagination__prev');
                        $nextNav = $this.find('.pagination__next');
                        $prevNavText = $prevNav.find('.pagination__prev-txt');
                        updatePrevText = function() {
                            $prevNavText = $prevNav.find(
                                '.pagination__prev-txt'
                            );
                            return $prevNavText.html('Prev');
                        };
                        calPgnWidth = function() {
                            var pgnWidth, prevWidth, vsbNav, vsbNavs;
                            // number of visible <a> plus <strong class="current">
                            vsbNav =
                                $this.find('.pagination__item a:visible')
                                    .length + 1;
                            vsbNavs = vsbNav + 2;
                            prevWidth = 100 / vsbNavs;
                            pgnWidth = 100 - prevWidth * 2;
                            $prevNav.css('width', prevWidth + '%');
                            $nextNav.css('width', prevWidth + '%');
                            $pgnNav.css('width', pgnWidth + '%');
                            // <a> and <strong>
                            return $pgnNav
                                .find('a, strong')
                                .css('width', 100 / vsbNav + '%');
                        };
                        /* func :: calculate and display prev/next */
                        // 85px - display full text
                        showPrevNext = function() {
                            var prevNavWidth;
                            prevNavWidth = $prevNav.innerWidth();
                            if (prevNavWidth > 100) {
                                $this.addClass('fullprevnext');
                                // display Previous
                                return $prevNavText.html('Previous');
                            } else if (
                                prevNavWidth < 101 &&
                                prevNavWidth > 60
                            ) {
                                $this.addClass('fullprevnext');
                                // display Prev
                                return $prevNavText.html('Prev');
                            } else {
                                return $this.removeClass('fullprevnext');
                            }
                        };
                        magicDraw = function() {
                            // draw init magic line
                            $magicLine.width($curNav.width());
                            if ($curNav.position() !== void 0) {
                                $magicLine.css('left', $curNav.position().left);
                            }

                            // assign orig values
                            $magicLine.data(
                                'origLeft',
                                $magicLine.position().left
                            );
                            return $magicLine.data(
                                'origWidth',
                                $magicLine.width()
                            );
                        };
                        // END funcs

                        // create magic line
                        $mainNav.append('<li class="pagination__magic-line">');

                        // declare magic line
                        $magicLine = $this.find('.pagination__magic-line');
                        // add extra class & element if no prev or next
                        prevNavWidth = $prevNav.innerWidth();
                        if (prevNavWidth > 100) {
                            prevText = 'Previous';
                        } else {
                            prevText = 'Prev';
                        }
                        if (!$prevNav.children().length) {
                            $prevNav.addClass('disabled');
                            $prevNav.append(
                                '<a rel="prev"><i class="pagination__prev-icon icon-angle-left"></i><span class="pagination__prev-txt">' +
                                    prevText +
                                    '</span></a>'
                            );
                        }
                        if (!$nextNav.children().length) {
                            $nextNav.addClass('disabled');
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
                                    left: $magicLine.data('origLeft'),
                                    width: $magicLine.data('origWidth')
                                });
                            }
                        );
                        /* Window Resize Changes */
                        return window.addEventListener('resize', function() {
                            updatePrevText();
                            calPgnWidth();
                            showPrevNext();
                            return magicDraw();
                        });
                    }
                }
            });

            return $('.pagination').mgPgnation();
        })(jQuery);
    }.call(this));
};



/* Utils */ 
const iframeRatio = () => {
    // Find all iframes
    var $iframes = $('.typography iframe');

    // Find &amp;amp;#x26; save the aspect ratio for all iframes
    $iframes.each(function() {
        $(this)
            .data('ratio', this.height / this.width)
            // Remove the hardcoded width &amp;amp;#x26; height attributes
            .removeAttr('width')
            .removeAttr('height');
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
                    .height(width * $(this).data('ratio'));
            });
            // Resize to fix all iframes on page load.
        })
        .resize();
};



/* Mobile */
// Hamburger add Class
const hamburger = () => {
    let hamburger = document.querySelector('.hamburger-icon');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('hamburger-icon_active');
    });
};
// Side-Nav
const sideNav = () => {
    let ham = document.querySelector('.hamburger');
    let sidenav = document.querySelector('.side-nav');
    let header = document.querySelector('.mobile-header');
    let main = document.querySelector('main');

    ham.addEventListener('click', () => {
        sidenav.classList.toggle('side-nav_active');

        const headerSlide = () => {
            header.setAttribute(
                'style',
                'transform: translateX(calc(100% - 60px));'
            );

            // document.body.classList.add('body__side-nav');
            document.body.style.overflow = 'hidden';
        };

        const headerNormal = () => {
            header.setAttribute('style', 'transform: translateX(0);');
            // document.body.classList.remove('body__side-nav');
            document.body.style.overflow = 'auto';
        };

        sidenav.classList.contains('side-nav_active')
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
                };
            }
        });
    };

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
};

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
