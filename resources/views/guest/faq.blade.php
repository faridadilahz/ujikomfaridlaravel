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
    <link rel="stylesheet" href="{{ asset('css/guest/faq.css') }}" />
</head>

<body>
    @include('partials.navbar')

    <section id="faq" class="faq-section">
        <div class="container">
            <div class="faq-header">
                <h2 class="section-title-center">Pertanyaan yang Sering Diajukan</h2>
                <p class="faq-subtitle">
                    Tidak menemukan apa yang Anda inginkan? Hubungi kami
                </p>
            </div>

            <div class="faq-list">
                <div class="faq-item active">
                    <div class="faq-question">
                        <h3>
                            Apa saja program keahlian/jurusan yang ada di Sekolah Seru
                            Sekali?
                        </h3>
                        <ion-icon name="remove-outline" class="faq-icon"></ion-icon>
                    </div>
                    <div class="faq-answer">
                        <p>
                            Sekolah Seru Sekali memiliki berbagai program keahlian unggulan
                            seperti Pengembangan Perangkat Lunak dan Gim (PPLG), Teknik
                            Jaringan Komputer dan Telekomunikasi (TJKT), Desain Komunikasi
                            Visual (DKV), dan Broadcasting & Perfilman.
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>
                            Bagaimana jalur pendaftaran siswa baru di Sekolah Seru Sekali?
                        </h3>
                        <ion-icon name="add-outline" class="faq-icon"></ion-icon>
                    </div>
                    <div class="faq-answer">
                        <p>
                            Pendaftaran siswa baru dapat dilakukan secara online melalui
                            portal resmi PPDB atau langsung datang ke Sekretariat PPDB
                            Sekolah Seru Sekali pada jam kerja.
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>
                            Apakah Sekolah Seru Sekali menyediakan fasilitas tempat
                            tinggal/asrama?
                        </h3>
                        <ion-icon name="add-outline" class="faq-icon"></ion-icon>
                    </div>
                    <div class="faq-answer">
                        <p>
                            Saat ini Sekolah Seru Sekali belum menyediakan asrama resmi,
                            namun terdapat banyak lokasi kos/kontrakan terdekat di sekitar
                            lingkungan sekolah.
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>
                            Bagaimana sistem pembelajaran dan fasilitas praktikum di
                            sekolah?
                        </h3>
                        <ion-icon name="add-outline" class="faq-icon"></ion-icon>
                    </div>
                    <div class="faq-answer">
                        <p>
                            Pembelajaran di Sekolah Seru Sekali menggunakan kurikulum
                            berbasis industri modern yang ditunjang laboratorium komputer
                            berstandar tinggi serta fasilitas praktik teknologi terkini.
                        </p>
                    </div>
                </div>
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

    <script>
        document.querySelectorAll(".faq-item").forEach((item) => {
            item.addEventListener("click", () => {
                const isActive = item.classList.contains("active");

                // Opsional: Tutup item lain pas klik item baru
                document.querySelectorAll(".faq-item").forEach((i) => {
                    i.classList.remove("active");
                    const icon = i.querySelector(".faq-icon");
                    if (icon) icon.setAttribute("name", "add-outline");
                });

                // Toggle item yang diklik
                if (!isActive) {
                    item.classList.add("active");
                    const icon = item.querySelector(".faq-icon");
                    if (icon) icon.setAttribute("name", "remove-outline");
                }
            });
        });
    </script>
</body>