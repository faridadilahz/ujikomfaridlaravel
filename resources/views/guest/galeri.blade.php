<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sekolah Seru Sekali - Seruli</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="{{ asset('css/guest/galeri.css') }}" />
</head>

<body>
    @include('partials.navbar')

    <section id="galeri" class="gallery-section">
        <div class="container gallery-container">
            <div class="gallery-content">
                <h2 class="section-title-center">Galeri Seruli</h2>
            </div>

            <div class="news-search-box">
                <div class="search-input-wrapper">
                    <ion-icon name="search-outline" class="search-icon"></ion-icon>
                    <input type="text" class="search-input" placeholder="Cari galeri disini..." />
                </div>
                <button type="button" class="btn-search">Cari</button>
            </div>
        </div>

        <div class="gallery-grid">
            <article class="gallery-card">
                <div class="gallery-card-image">
                    <img src="assets/img/galeri-card.jpg" alt="Berita Seruli" />
                </div>
                <div class="gallery-card-body">
                    <div class="gallery-date">
                        <ion-icon name="calendar-outline"></ion-icon>
                        <span>27 Juli 2026</span>
                    </div>
                    <h3 class="gallery-card-title">
                        Upacara Bendera Rutin Hari Senin Sekolah Seru Sekali
                    </h3>
                    <div class="gallery-card-footer">
                        <span class="badge-tag">Kegiatan</span>
                        <a href="#" class="gallery-cta">
                            Lihat Selengkapnya
                            <ion-icon name="open-outline"></ion-icon>
                        </a>
                    </div>
                </div>
            </article>

            <article class="gallery-card">
                <div class="gallery-card-image">
                    <img src="assets/img/galeri-card.jpg" alt="Berita Seruli" />
                </div>
                <div class="gallery-card-body">
                    <div class="gallery-date">
                        <ion-icon name="calendar-outline"></ion-icon>
                        <span>27 Juli 2026</span>
                    </div>
                    <h3 class="gallery-card-title">
                        Upacara Bendera Rutin Hari Senin Sekolah Seru Sekali
                    </h3>
                    <div class="gallery-card-footer">
                        <span class="badge-tag">Kegiatan</span>
                        <a href="#" class="gallery-cta">
                            Lihat Selengkapnya
                            <ion-icon name="open-outline"></ion-icon>
                        </a>
                    </div>
                </div>
            </article>

            <article class="gallery-card">
                <div class="gallery-card-image">
                    <img src="assets/img/galeri-card.jpg" alt="Berita Seruli" />
                </div>
                <div class="gallery-card-body">
                    <div class="gallery-date">
                        <ion-icon name="calendar-outline"></ion-icon>
                        <span>27 Juli 2026</span>
                    </div>
                    <h3 class="gallery-card-title">
                        Upacara Bendera Rutin Hari Senin Sekolah Seru Sekali
                    </h3>
                    <div class="gallery-card-footer">
                        <span class="badge-tag">Kegiatan</span>
                        <a href="#" class="gallery-cta">
                            Lihat Selengkapnya
                            <ion-icon name="open-outline"></ion-icon>
                        </a>
                    </div>
                </div>
            </article>

            <article class="gallery-card">
                <div class="gallery-card-image">
                    <img src="assets/img/galeri-card.jpg" alt="Berita Seruli" />
                </div>
                <div class="gallery-card-body">
                    <div class="gallery-date">
                        <ion-icon name="calendar-outline"></ion-icon>
                        <span>27 Juli 2026</span>
                    </div>
                    <h3 class="gallery-card-title">
                        Upacara Bendera Rutin Hari Senin Sekolah Seru Sekali
                    </h3>
                    <div class="gallery-card-footer">
                        <span class="badge-tag">Kegiatan</span>
                        <a href="#" class="gallery-cta">
                            Lihat Selengkapnya
                            <ion-icon name="open-outline"></ion-icon>
                        </a>
                    </div>
                </div>
            </article>
        </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container footer-container">
            <div class="footer-brand">
                <a href="#" class="logo">
                    <img src="assets/img/logosss.png" alt="Logo Seruli" class="logo-img-footer" />
                    <span class="logo-text">Seruli</span>
                </a>
                <p class="footer-desc">
                    Mewujudkan generasi unggul, berkarakter, dan kompeten di bidang
                    teknologi dan kejuruan. Siap kerja, santun, mandiri dan kreatif.
                </p>

                <div class="social-icons">
                    <a href="https://api.whatsapp.com/send/?phone=628212262442" class="social-icon-btn" target="_blank"
                        aria-label="WhatsApp">
                        <ion-icon name="logo-whatsapp"></ion-icon>
                        <a href="https://www.instagram.com/smkn4kotabogor/" class="social-icon-btn" target="_blank"
                            aria-label="Instagram">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </a>
                    <a href="https://www.youtube.com/channel/UC4M-6Oc1ZvECz00MlMa4v_A/videos?app=desktop"
                        class="social-icon-btn" target="_blank" aria-label="Youtube">
                        <ion-icon name="logo-youtube"></ion-icon>
                    </a>
                    <a href="https://web.facebook.com/profile.php?id=100054636630766" class="social-icon-btn"
                        target="_blank" aria-label="Facebook">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="mailto:smkn4@smkn4bogor.sch.id" class="social-icon-btn" target="_blank"
                        aria-label="Facebook">
                        <ion-icon name="mail-outline"></ion-icon>
                    </a>
                </div>
            </div>

            <div class="footer-nav">
                <ul class="footer-links">
                    <li><a href="beranda.html">Beranda</a></li>
                    <li><a href="berita.html">Berita</a></li>
                    <li><a href="galeri.html">Galeri</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                </ul>

                <ul class="footer-links">
                    <li><a href="#kebijakan-privasi">Kebijakan Privasi</a></li>
                    <li><a href="#ketentuan-layanan">Ketentuan Layanan</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <p>
                    © Copyright 2026 Sekolah Seru Sekali. Hak Cipta Dilindungi
                    Undang-Undang.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // ==========================================
        // AUTO ACTIVE NAVBAR LINK PER HALAMAN (PAGE URL)
        // ==========================================
        document.addEventListener("DOMContentLoaded", () => {
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll(".nav-link");

            navLinks.forEach((link) => {
                // Hapus kelas active bawaan
                link.classList.remove("active");

                const linkPath = link.getAttribute("href");

                // Cek apakah URL browser saat ini mengandung folder/path dari href link
                if (linkPath && currentPath.includes(linkPath.replace("..", ""))) {
                    link.classList.add("active");
                }
            });
        });
    </script>
</body>