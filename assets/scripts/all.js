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

    if(document.querySelector('.pagenav')) {
        let header = document.querySelectorAll('main h2'),
            pagenav = document.querySelector('.pagenav');

        header.forEach(el => {
            let item = document.createElement('li'),
                anchor = document.createElement('a'),
                label = el.innerText || el.textContent;

            anchor.setAttribute('class', 'px-4 text-base bg-white rounded-full border-2 transition-colors pointer-events-auto md:text-3xl border-red hover:bg-red hover:text-white filter-btn');
            anchor.style.textDecoration = 'none'

            anchor.innerHTML = label;
            anchor.href = '#'+slugify(label)
            el.id = slugify(label)

            anchor.addEventListener('click', evt => {
                evt.preventDefault()
                let target = document.querySelector('#'+evt.currentTarget.href.split('#')[1]);

                let title = document.querySelector('.title-wrapper');

                title.classList.remove('md:translate-x-1/2')
                title.querySelector('h1').classList.remove('md:-translate-x-1/2')
                title.querySelector('h1').classList.add('md:text-7xl')
                
                setTimeout(() => {
                    target.scrollIntoView();
                }, 300);
            })

            item.appendChild(anchor)
            pagenav.appendChild(item)
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

const slugify = str =>
  str
    .toLowerCase()
    .trim()
    .replace(/[^\w\s-]/g, '')
    .replace(/[\s_-]+/g, '-')
    .replace(/^-+|-+$/g, '');