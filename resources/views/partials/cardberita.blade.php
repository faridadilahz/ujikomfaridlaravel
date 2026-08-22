        <link rel="stylesheet" href="{{ asset('css/partials/cardberita.css') }}" />
        <div class="news-grid">
            <article class="news-card">
                <div class="news-card-image">
                    <img src="assets/img/berita-card.png" alt="Berita Seruli" />
                </div>
                <div class="news-card-body">
                    <div class="news-date">
                        <ion-icon name="calendar-outline"></ion-icon>
                        <span>27 Oktober 2025</span>
                    </div>
                    <h3 class="news-card-title">
                        Siswa PPLG Sekolah Seru Sekali Juara 2 TECHNOUPDATE X HIMPACT
                    </h3>
                    <p class="news-card-desc">
                        Selamat dan sukses kepada tim PPLG Sekolah Seru Sekali yang
                        berhasil meraih Juara 2 dalam ajang kompetisi teknologi
                        bergengsi tingkat provinsi.
                    </p>
                    <div class="news-card-footer">
                        <span class="badge-tag">Prestasi</span>
                        <a href="#" class="news-cta">
                            Lihat Selengkapnya
                            <ion-icon name="open-outline"></ion-icon>
                        </a>
                    </div>
                </div>
            </article>
        </div>
        {{-- <link rel="stylesheet" href="{{ asset('css/partials/cardberita.css') }}" />

<div class="news-grid">
    @forelse($beritas as $item)
        <article class="news-card">
            <div class="news-card-image">
                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->judul }}" />
            </div>
            <div class="news-card-body">
                <div class="news-date">
                    <ion-icon name="calendar-outline"></ion-icon>
                    <span>{{ $item->created_at->translatedFormat('d F Y') }}</span>
                </div>
                <h3 class="news-card-title">
                    {{ $item->judul }}
                </h3>
                <p class="news-card-desc">
                    {{ Str::limit($item->deskripsi, 120) }}
                </p>
                <div class="news-card-footer">
                    <span class="badge-tag">{{ $item->kategori }}</span>
                    <a href="#" class="news-cta">
                        Lihat Selengkapnya
                        <ion-icon name="open-outline"></ion-icon>
                    </a>
                </div>
            </div>
        </article>
    @empty
        <p class="text-muted">Belum ada berita yang diposting.</p>
    @endforelse
</div> --}}