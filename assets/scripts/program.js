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

    document.querySelectorAll('.event-preview').forEach(el => {
        el.addEventListener('load', () => {
            iso.arrange()
        })
    })

    document.querySelector('.toggle-filter').addEventListener('click', () =>{
        document.querySelector('.filter').classList.toggle('left-0')
        document.querySelector('.filter').classList.toggle('-left-10')
        document.querySelector('.filter').classList.toggle('translate-x-0')
        document.querySelector('.filter').classList.toggle('-translate-x-full')
    })
}
