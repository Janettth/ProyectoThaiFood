let slideIndex = 0;
showSlides(slideIndex);

// Función para avanzar o retroceder diapositivas
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Función principal para mostrar las diapositivas
function showSlides(n) {
    let i;
    let slides = document.querySelectorAll('.carrusel_slider img');
    
    // Reinicia el índice si se excede el número de diapositivas o es negativo
    if (n >= slides.length) {slideIndex = 0}    
    if (n < 0) {slideIndex = slides.length - 1}
    
    // Oculta todas las diapositivas
    for (i = 0; i < slides.length; i++) {
        slides[i].classList.remove('active');
    }
    
    // Muestra la diapositiva actual
    slides[slideIndex].classList.add('active');
}
