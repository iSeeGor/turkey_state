$(function() {
  //   preventDefaultLinks();
  smoothScroll();
  themeSelect();
  searchCollaps();
  searchFormPriceMask();
  searchFormTabs();
  svg4everybody();
  metaDropdown();
  scrollOutPlugin();
  toFavoritToggle();
  propertySLider();
  aosRun();
  testimonialSlider();

  //   filterTabsToggle();
  //   categoryLinksToggle();
  //   bgLinesResize();
  //   hamburgerToggle();
});

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
  $(".search-form__input").mask("000 000 000", { reverse: true });
};

// Search Form Tabs
const searchFormTabs = () => {
  $(document).on("click", ".search-form__tab", function() {
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
  if(window.matchMedia("(min-width:992px)").matches === true){
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
		disable: 'mobile',
		offset: 140,
		duration: 800,
		once: true
	});
	
}

const testimonialSlider = () => {

  let slider = new Swiper(".swiper-container", {
    // wrapperClass: "testimonialSlider__container",
    // slideClass: "testimonialSlider__slide",
    // loop: true,
    speed: 600,
    slidesPerView: "auto",
    spaceBetween: 30,
    threshold: 10,
    effect: 'fade',

    navigation: {
      nextEl: ".property-slider__button-next",
      prevEl: ".property-slider__button-prev"
    },

    scrollbar: {
      el: ".property-slider__scrollbar",
      draggable: true
    },

    fadeEffect: {
      crossFade: true
    },

    // breakpoints: {
    //   // when window width is >= 320px
    //   320: {
    //     slidesPerView: 1,
    //     spaceBetween: 60
    //   },

    //   767: {
    //     slidesPerView: 2,
    //     spaceBetween: 30
    //   },

    //   991: {
    //     slidesPerView: 3
    //   }
    // }

    
  });
  
  $(document).on('click', '.testimonialSlider__thumbs-items', function(){
    let slideThumbs = $('.testimonialSlider__thumbs-items');
    let current = slideThumbs.index(this);

    slider.slideTo(current); 
  });
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
