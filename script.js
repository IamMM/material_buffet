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

// SWIPER LOGO Carousel
var swiper = new Swiper('.mySwiper', {
  slidesPerView: 2,
  spaceBetween: 10,
  grabCursor: true,
  freeMode: true,
  loop: true,
  speed: 6000,
  autoplay: {
    delay: 1,
    disableOnInteraction: false,
  },
  breakpoints: {
    480: {
      slidesPerView: 3,
      spaceBetween: 20
    },
    640: {
      slidesPerView: 4,
      spaceBetween: 30
    },
    768: {
      slidesPerView: 5,
      spaceBetween: 40
    },
    1024: {
      slidesPerView: 6,
      spaceBetween: 50
    }
  },
});
