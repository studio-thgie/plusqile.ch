document.addEventListener('DOMContentLoaded', () => {
    let macy = Macy({
        container: '.macy',
        waitForImages: false,
        margin: {
            x: 40,
            y: 20
        },
        columns: 2,
        breakAt: {
            520: 1
        }
    });
});
