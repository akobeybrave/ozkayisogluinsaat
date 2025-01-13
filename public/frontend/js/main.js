
/********** add event on multiple elements **********/

const addEventOnElements = function (elements, eventType, callback) {
  for (let i = 0, len = elements.length; i < len; i++) {
    elements[i].addEventListener(eventType, callback);
  }
};

/********** add event on multiple elements **********/

/********** NAVBAR TOGGLER FOR MOBILE **********/

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");

const toggleNav = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
  document.body.classList.toggle("nav-active");
};

addEventOnElements(navTogglers, "click", toggleNav);

/********** NAVBAR TOGGLER FOR MOBILE **********/

/**********  **********/

const header = document.querySelector("[data-header]");

window.addEventListener("scroll", function () {
  header.classList[window.scrollY > 100 ? "add" : "remove"]("active");
});

/**********  **********/

/********** SWIPER JS **********/

const swiper = new Swiper('.swiper', {
  loop: true,
  spaceBetween: 30,
  effect: "fade",
  fadeEffect: { crossFade: true },
  speed: 4000,
  virtualTranslate: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
    dynamicBullets: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
},
});



/********** SWIPER JS **********/

/********** SCROOL UP **********/

let mybutton = document.getElementById("btnToTop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

/********** SCROOL UP **********/

/********** SCROOL REVEAL **********/

window.sr = ScrollReveal({ reset: true });

sr.reveal('.sr-left', {
  origin : 'top',
  delay: 375,
  duration: 1000,
  distance : '300px',
  easing   : 'ease-in-out',
});

sr.reveal('.sr-right', {
  origin : 'bottom',
  delay: 375,
  duration: 1000,
  distance : '300px',
  easing   : 'ease-in-out',
});

/********** SCROOL REVEAL **********/

/**********  **********/



/**********  **********/
