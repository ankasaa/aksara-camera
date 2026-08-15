import './bootstrap';

// Pilih elemen navbar
const navbar = document.getElementById("navbar");

// Inisialisasi variabel untuk posisi scroll terakhir
let lastScrollY = window.scrollY;

// Tambahkan event listener untuk mendeteksi saat pengguna melakukan scroll
window.addEventListener("scroll", () => {
    // Jika pengguna telah scroll ke bawah (scrollY lebih dari 0)
    if (window.scrollY > 0) {
        // Tambahkan kelas "sticky" ke elemen navbar untuk membuatnya tetap di posisi atas halaman
        navbar.classList.add("sticky");
    } else {
        // Hapus kelas "sticky" dari elemen navbar jika berada di posisi awal halaman
        navbar.classList.remove("sticky");  
    }
    
    // Perbarui posisi scroll terakhir dengan posisi scroll saat ini
    lastScrollY = window.scrollY;
});

// Fungsi untuk mengontrol sidebar
function toggleSidebar() {
    // Pilih elemen sidebar
    const sidebar = document.getElementById('sidebar');
    
    // Cek posisi sidebar saat ini dengan properti left
    if (sidebar.style.left === '0px') {
        // Jika sidebar sudah terbuka (left = 0px), sembunyikan dengan mengatur left ke -250px
        sidebar.style.left = '-250px';
    } else {
        // Jika sidebar tertutup, buka dengan mengatur left ke 0px
        sidebar.style.left = '0px';
    }
}



// Slider Script
const sliderContainer = document.querySelector('.slider-container');
const sliderWrapper = document.querySelector('.slider-wrapper');
const dotsContainer = document.querySelector('.dots-container');
const SLIDE_GAP = 10;
const AUTO_PLAY_DELAY = 3500;
const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

let currentIndex = 0;
let autoSlideInterval;
let isHovered = false;

if (sliderContainer && sliderWrapper && dotsContainer && sliderWrapper.children.length > 1) {
    const slides = Array.from(sliderWrapper.children);
    const firstClone = slides[slides.length - 1].cloneNode(true);
    const lastClone = slides[0].cloneNode(true);
    sliderWrapper.insertBefore(firstClone, slides[0]);
    sliderWrapper.appendChild(lastClone);
    const track = Array.from(sliderWrapper.children);

    const getStep = () => {
        const firstSlide = track[1];
        return firstSlide ? firstSlide.getBoundingClientRect().width + SLIDE_GAP : 0;
    };

    const updateSlidePosition = () => {
        sliderWrapper.style.transform = `translate3d(${-currentIndex * getStep()}px, 0, 0)`;
    };

    slides.forEach((_, index) => {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        if (index === 0) dot.classList.add('active');
        dot.setAttribute('role', 'button');
        dot.setAttribute('tabindex', '0');
        dot.setAttribute('aria-label', `Go to slide ${index + 1}`);
        dot.addEventListener('click', () => goToSlide(index));
        dot.addEventListener('keydown', (event) => {
            if (event.key === 'Enter' || event.key === ' ') {
                event.preventDefault();
                goToSlide(index);
            }
        });
        dotsContainer.appendChild(dot);
    });

    const updateDots = () => {
        dotsContainer.querySelectorAll('.dot').forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    };

    const goToSlide = (index) => {
        const previousIndex = currentIndex;
        currentIndex = index;
        const directDistance = Math.abs(index - previousIndex);
        const wrapDistance = slides.length - directDistance;
        const isLongJump = directDistance > 1 || wrapDistance < directDistance;

        if (isLongJump) {
            sliderWrapper.style.transition = 'transform 0.45s cubic-bezier(0.4, 0, 0.2, 1)';
            requestAnimationFrame(updateSlidePosition);
            setTimeout(() => {
                sliderWrapper.style.transition = '';
            }, 500);
        } else {
            updateSlidePosition();
        }

        updateDots();
    };

    const startAutoSlide = () => {
        stopAutoSlide();
        if (prefersReducedMotion) return;
        autoSlideInterval = setInterval(() => {
            goToSlide((currentIndex + 1) % slides.length);
        }, AUTO_PLAY_DELAY);
    };

    const stopAutoSlide = () => {
        clearInterval(autoSlideInterval);
    };

    sliderContainer.addEventListener('mouseenter', () => {
        isHovered = true;
        stopAutoSlide();
    });
    sliderContainer.addEventListener('mouseleave', () => {
        isHovered = false;
        startAutoSlide();
    });
    sliderContainer.addEventListener('focusin', stopAutoSlide);
    sliderContainer.addEventListener('focusout', () => {
        if (!isHovered) startAutoSlide();
    });
    sliderContainer.addEventListener('click', (event) => {
        if (event.target.classList.contains('dot') && !isHovered) startAutoSlide();
    });

    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            sliderWrapper.style.transition = 'none';
            updateSlidePosition();
            sliderWrapper.style.transition = '';
        }, 150);
    });

    sliderWrapper.style.transition = 'none';
    updateSlidePosition();
    requestAnimationFrame(() => {
        sliderWrapper.style.transition = '';
    });

    updateDots();

    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            stopAutoSlide();
        } else if (!isHovered) {
            startAutoSlide();
        }
    });

    startAutoSlide();
}
// END-Slider-Script


