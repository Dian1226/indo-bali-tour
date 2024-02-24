document.addEventListener('DOMContentLoaded', function () {
    // Mengambil elemen dengan class "menu-btn" dan "nav-links"
    let menuBtn = document.querySelector('.menu-btn');
    let navLinks = document.querySelector('.nav-links');

    // Menambahkan event listener untuk menanggapi klik pada tombol menu
    menuBtn.addEventListener('click', function () {
        // Toggle class "active" pada "nav-links" untuk menampilkan atau menyembunyikan menu
        navLinks.classList.toggle('active');

        // Toggle class "smooth" setelah beberapa detik untuk memberikan efek transisi
        setTimeout(() => {
            navLinks.classList.toggle('smooth');
        }, 100);
    });
});
