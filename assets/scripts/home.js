document.addEventListener('DOMContentLoaded', () => {
    setTimeout(init, 50);
});

function init() {
    var iso = new Isotope(document.querySelector('.isotope'), {
        itemSelector: '.isotope-item',
        transitionDuration: '0.1s'
    });
}