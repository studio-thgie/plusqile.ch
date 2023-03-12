document.addEventListener('DOMContentLoaded', () => {
    if(document.querySelector('.title-wrapper')) {
        let title = document.querySelector('.title-wrapper');
        
        document.addEventListener('scroll', evt => {
            
            let scroll_distance = document.querySelector('.main-nav').offsetHeight;

            if(scroll_distance < get_scroll()[1]) {
                title.classList.remove('md:translate-x-1/2')
                title.querySelector('h1').classList.remove('md:-translate-x-1/2')
                title.querySelector('h1').classList.add('md:text-7xl')
            } else {
                title.classList.add('md:translate-x-1/2')
                title.querySelector('h1').classList.add('md:-translate-x-1/2')
                title.querySelector('h1').classList.remove('md:text-7xl')
            }
        })
    }

    if(document.querySelector('.cover')) {
        let cover = document.querySelector('.cover');

        document.addEventListener('scroll', evt => {

            let scroll_distance = document.querySelector('.main-nav').offsetHeight;

            if(scroll_distance < get_scroll()[1]) {
                cover.classList.remove('md:w-full');
                cover.classList.add('md:w-1/2');
            } else {
                cover.classList.add('md:w-full');
                cover.classList.remove('md:w-1/2');
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