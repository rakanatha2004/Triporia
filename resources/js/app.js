import './bootstrap';
$(document).ready(function(){
    $('.image-gallery').slick({
        dots: true, // Menampilkan titik navigasi
        infinite: true, // Infinite loop
        speed: 500, // Kecepatan transisi
        slidesToShow: 1, // Menampilkan satu gambar
        slidesToScroll: 1 // Menggeser satu gambar
    });
});