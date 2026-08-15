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

// Fungsi untuk mengontrol mobile menu dropdown
const mobileMenuBtn = document.getElementById("mobile-menu-btn");
const mobileMenu = document.getElementById("mobile-menu");

if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener("click", () => {
        const isHidden = mobileMenu.classList.contains("hidden");
        mobileMenu.classList.toggle("hidden");
        mobileMenuBtn.setAttribute("aria-expanded", String(!isHidden));
    });

    // Tutup menu otomatis saat link navigasi diklik
    mobileMenu.querySelectorAll("a, button").forEach((el) => {
        el.addEventListener("click", () => {
            mobileMenu.classList.add("hidden");
            mobileMenuBtn.setAttribute("aria-expanded", "false");
        });
    });
}



// Slider logic moved to index.blade.php (Center Highlight carousel)


