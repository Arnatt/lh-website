document.addEventListener('DOMContentLoaded', function () {
    var myCarousel = document.querySelector('#myCarousel');
    if (myCarousel) {
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 3000,
            ride: 'carousel'
        });
    }
});