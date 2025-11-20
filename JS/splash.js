let intro = document.querySelector('.intro');
let logo = document.querySelector('.logo_header');
let logoSpan = document.querySelectorAll('.logo');

window.addEventListener('DOMContentLoaded', () => {
    setTimeout(() =>{
        logoSpan.forEach((span, idx) =>{
            setTimeout(() =>{
                span.classList.add('active');

            }, (idx +1)*80);
        });

        setTimeout(() => {
            logoSpan.forEach((span) =>{
                span.classList.remove('active');
                span.classList.add('fade');
            });
        }, logoSpan.length * 400 + 1000);
    },200);

    setTimeout( () => {
        intro.style.top = '-100vh';
    }, 2100);
});