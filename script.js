// FIT TEXT
$(".banner").fitText();

// SCROLL BEHAVIOUR
// go to top smooth
function topFunction() {
  window.scrollTo({top: 0, behavior: 'smooth'});
}

// shrink header when scroll
$(document).on("scroll", function(){
  if ($(document).scrollTop() > 30){
    $("header").addClass("shrink");
  } else {
    $("header").removeClass("shrink");
  }
});


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

// MAPBOX
mapboxgl.accessToken = 'pk.eyJ1IjoiaWFtbW0iLCJhIjoiY2wwM3lscmd0MGdyNjNpbWp0YjBjbGE1OCJ9.h6EMCPIzYj4tCMEqgjQRsQ';
const map = new mapboxgl.Map({
  container: 'map',
  zoom: 10.5,
  center: [12.3747329,51.3406321], // x,y coordinates
  style: 'mapbox://styles/iammm/cl06qg049000415p304moodap',
  //cooperativeGestures: true // ctrl + scroll = zoom
});

map.scrollZoom.disable();
map.addControl(new mapboxgl.NavigationControl());
//map.addControl(new mapboxgl.FullscreenControl());

map.on('click', (event) => {
  // If the user clicked on one of your markers, get its information.
  const features = map.queryRenderedFeatures(event.point, {
    layers: ['materialbuffet-locations']
  });
  if (!features.length) {
    return;
  }
  const feature = features[0];

  // Create a popup, specify its options and properties, and add it to the map.
  const popup = new mapboxgl.Popup({ offset: [0, -15] })
  .setLngLat(feature.geometry.coordinates)
  .setHTML(
    `<h1>${feature.properties.title}</h1>
    <h2>Adresse</h2><p>${feature.properties.adress}</p>
    <h2>Öffnungszeiten</h2><p>${feature.properties.open}</p>
    <h2>ÖPNV</h2><p>${feature.properties.öpnv}</p>`
  )
  .addTo(map);
});

var x_offset = 0.002;
var y_offset = 0.0018;

document.getElementById('markt').addEventListener('click', () => {
  map.flyTo({
    center: [12.316132 + x_offset, 51.315969 + y_offset],
    zoom: 15,
    essential: true // this animation is considered essential with respect to prefers-reduced-motion
  });
});

document.getElementById('lager').addEventListener('click', () => {
  map.flyTo({
    center: [12.316037 - x_offset, 51.378073 + y_offset],
    zoom: 14,
    essential: true // this animation is considered essential with respect to prefers-reduced-motion
  });
});
