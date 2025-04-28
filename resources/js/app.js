document.addEventListener('DOMContentLoaded', () => {
    if ($('.image-gallery').length) {
        $('.image-gallery').slick({
            dots: true,          // Menampilkan titik navigasi
            infinite: true,      // Infinite loop
            speed: 500,          // Kecepatan transisi
            slidesToShow: 1,     // Menampilkan satu gambar
            slidesToScroll: 1    // Menggeser satu gambar
        });
    }

    // Mobile menu button toggle
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');
    if (btn && menu) {
        const [iconOpen, iconClose] = btn.querySelectorAll('svg');
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            iconOpen.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');

            const expanded = btn.getAttribute('aria-expanded') === 'true';
            btn.setAttribute('aria-expanded', String(!expanded));
        });
    }

    // Navbar scroll effect with fading effect using Tailwind CSS
    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('bg-white/20', 'backdrop-blur-md');
                navbar.classList.remove('bg-white');
            } else {
                navbar.classList.remove('bg-white/20', 'backdrop-blur-md');
                navbar.classList.add('bg-white');
            }
        });
    }
});
