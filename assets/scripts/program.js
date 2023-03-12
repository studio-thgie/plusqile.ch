let iso;

document.addEventListener('DOMContentLoaded', () => {
    setTimeout(init, 50);
});

function init() {
    iso = new Isotope(document.querySelector('.isotope'), {
        itemSelector: '.isotope-item',
        transitionDuration: '0.1s'
    });

    document.querySelectorAll('.filter-btn').forEach(el => {
        el.addEventListener('click', evt => {
            
            document.querySelectorAll('.filter-btn').forEach(el => {
                el.classList.remove('text-white');
                el.classList.remove('bg-red');
            })

            evt.currentTarget.classList.add('text-white');
            evt.currentTarget.classList.add('bg-red');

            iso.arrange({
                filter: '.'+evt.currentTarget.dataset.filter
            })
        })
    })
}
