document.addEventListener('DOMContentLoaded', () => {
    let macy = Macy({
        container: '.macy',
        waitForImages: true,
        margin: {
            x: 40,
            y: 80
        },
        columns: 2,
        breakAt: {
            520: 1
        }
    });

    macy.recalculate();
});
