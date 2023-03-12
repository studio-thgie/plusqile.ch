document.addEventListener('DOMContentLoaded', () => {
    let scroll_distance = document.querySelector('.main-nav').offsetHeight;

    if(document.querySelector('.title-wrapper')) {
        let title = document.querySelector('.title-wrapper');

        
        document.addEventListener('scroll', evt => {
            console.log(scroll_distance, get_scroll()[1])
            if(scroll_distance < get_scroll()[1]) {
                title.classList.remove('md:translate-x-1/2')
                title.querySelector('h1').classList.remove('md:-translate-x-1/2')
                title.querySelector('h1').classList.add('text-7xl')
            } else {
                title.classList.add('md:translate-x-1/2')
                title.querySelector('h1').classList.add('md:-translate-x-1/2')
                title.querySelector('h1').classList.remove('text-7xl')
            }
        })
    }

    if(document.querySelector('.cover')) {
        let cover = document.querySelector('.cover');

        document.addEventListener('scroll', evt => {
            if(scroll_distance < get_scroll()[1]) {
                cover.classList.remove('w-full');
                cover.classList.add('w-1/2');
            } else {
                cover.classList.add('w-full');
                cover.classList.remove('w-1/2');
            }
        })
    }
});

function get_scroll() {
    if (window.pageYOffset != undefined) {
        return [pageXOffset, pageYOffset];
    } else {
        var sx, sy, d = document,
            r = d.documentElement,
            b = d.body;
        sx = r.scrollLeft || b.scrollLeft || 0;
        sy = r.scrollTop || b.scrollTop || 0;
        return [sx, sy];
    }
}