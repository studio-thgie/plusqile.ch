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

    if(document.querySelector('.title-illustration')) {
        let illustration = document.querySelector('.title-illustration');

        document.addEventListener('scroll', evt => {

            let scroll_distance = document.querySelector('.main-nav').offsetHeight;

            if(scroll_distance < get_scroll()[1]) {
            } else {
            }
        })
    }

    if(document.querySelector('.filter')) {
        let filter_wrapper = document.querySelector('.filter-wrapper'),
            events = document.querySelector('.events');

        document.addEventListener('scroll', evt => {

            let scroll_distance = document.querySelector('.main-nav').offsetHeight;

            if(scroll_distance < get_scroll()[1]) {
                events.style.marginTop = (filter_wrapper.offsetHeight+60)+'px'
                filter_wrapper.classList.add('fixed')
                filter_wrapper.classList.add('top-0')
            } else {
                filter_wrapper.classList.remove('fixed')
                filter_wrapper.classList.remove('top-0')
                events.style.marginTop = '0px'

            }
        })
    }

    document.addEventListener('scroll', evt => {

        let scroll_distance = document.querySelector('.main-nav').offsetHeight;

        if(scroll_distance < get_scroll()[1]) {
            document.querySelector('.to-top').classList.add('opacity-1')
            document.querySelector('.to-top').classList.remove('opacity-0')
        } else {
            document.querySelector('.to-top').classList.add('opacity-0')
            document.querySelector('.to-top').classList.remove('opacity-1')
        }
    })

    document.querySelector('.to-top').addEventListener('click', () => {
        window.scrollTo(0, 0)
    })

    if(document.querySelector('.show-description')) {
        document.querySelectorAll('.show-description').forEach(el => {
            el.addEventListener('click', (evt) => {
                let target = evt.currentTarget.parentNode.parentNode.querySelector('.description');
                target.classList.toggle('show')
                evt.currentTarget.classList.toggle('rotate-0')
                evt.currentTarget.classList.toggle('rotate-180')

                iso.arrange()
                setTimeout(() => {
                    iso.arrange()
                }, 300);
            })
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