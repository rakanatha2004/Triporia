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

// resources/js/app.js

document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');
    if (!btn || !menu) return;
  
    const [iconOpen, iconClose] = btn.querySelectorAll('svg');
  
    btn.addEventListener('click', () => {
      menu.classList.toggle('hidden');
      iconOpen.classList.toggle('hidden');
      iconClose.classList.toggle('hidden');
  
      const expanded = btn.getAttribute('aria-expanded') === 'true';
      btn.setAttribute('aria-expanded', String(!expanded));
    });
  });
  