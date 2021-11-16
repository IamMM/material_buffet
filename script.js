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
}