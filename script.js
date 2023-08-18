// Obtener el navbar y los enlaces del navbar
const navbar = document.querySelector(".navbar");
const navbarLinks = document.querySelectorAll(".navbar-nav .nav-link");

// Escuchar el evento de scroll en la ventana
window.addEventListener("scroll", function() {
  // Obtener la posición actual del scroll
  const scrollPosition = window.scrollY;

  // Cambiar el color del navbar al hacer scroll hacia abajo
  if (scrollPosition > 100) { // Cambiar el valor según el punto donde desees que el navbar cambie de color
    navbar.classList.add("navbar-scrolled"); // Agregar la clase para el cambio de color
  } else {
    navbar.classList.remove("navbar-scrolled"); // Eliminar la clase para el cambio de color
  }
});





