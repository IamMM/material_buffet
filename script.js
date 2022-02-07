// Get the top button:
mybutton = document.getElementById("topBtn");

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  window.scrollTo({top: 0, behavior: 'smooth'});
}

// COPY TO CLIPBOARD
var clipboard = new ClipboardJS('.coordinates');

// MOBILE MENU
/*
 * Toggles on and off the 'active' class on the menu
 * and the toggler button.
 */
function toggle() {
	var element = document.getElementById("toggler");
	var menu = document.getElementById('menu');
	element.classList.toggle("active");
	menu.classList.toggle("active");
};

// LOGO SWIPER
var swiper1 = new Swiper('.logoSwiper', {
  slidesPerView: 2,
  spaceBetween: 10,
  loop: true,
  speed: 6000,
  autoplay: {
    delay: 1,
    disableOnInteraction: false,
  },
  breakpoints: {
    480: {
      slidesPerView: 3,
    },
    640: {
      slidesPerView: 4,
    },
    1024: {
      slidesPerView: 5,
    },
    1536: {
      slidesPerView: 6,
    },
  },
});

// MATERIAL SWIPER
var swiper2 = new Swiper('.materialSwiper', {
  slidesPerView: 2,
  spaceBetween: 20,
  loop: true,
  speed: 1000,
  autoplay: {
    delay: 3000,
  },
  breakpoints: {
    640: {
      slidesPerView: 3,
    },
    1536: {
      slidesPerView: 4,
    },
  },
});
