<aside class="sidebar">
  <div class="sidebar-brand">
    <a href="{{ url('/beranda') }}" class="logo">
      <img src="{{ asset('assets/img/logosss.png') }}" alt="Logo Seruli" class="logo-img" />
      <span class="logo-text">Seruli</span>
      <link rel="stylesheet" href="{{ asset('css/partials/sidebar.css') }}" />
    </a>
  </div>

  <div class="sidebar-menu-wrapper">
    <ul class="sidebar-menu">
      <li>
        <a href="{{ route('admin.dasbor') }}" class="nav-item {{ request()->routeIs('admin.dasbor') ? 'active' : '' }}">
          <ion-icon name="grid-outline"></ion-icon>
          <span>Dasbor</span>
        </a>
      </li>
      <li>
        <a href="{{ route('admin.berita') }}" class="nav-item {{ request()->routeIs('admin.berita') ? 'active' : '' }}">
          <ion-icon name="newspaper-outline"></ion-icon>
          <span>Kelola Berita</span>
        </a>
      </li>
      <li>
        <a href="{{ route('admin.galeri') }}" class="nav-item {{ request()->routeIs('admin.galeri') ? 'active' : '' }}">
          <ion-icon name="images-outline"></ion-icon>
          <span>Kelola Galeri</span>
        </a>
      </li>
      <li>
        <a href="{{ route('admin.faq') }}" class="nav-item {{ request()->routeIs('admin.faq') ? 'active' : '' }}">
          <ion-icon name="help-circle-outline"></ion-icon>
          <span>Kelola FAQ</span>
        </a>
      </li>
    </ul>
  </div>

  <div class="sidebar-footer">
    <ul class="sidebar-menu">
      <li>
        <a href="{{ route('admin.profil') }}" class="nav-item {{ request()->routeIs('admin.profil') ? 'active' : '' }}">
          <ion-icon name="person-outline"></ion-icon>
          <span>Profil</span>
        </a>
      </li>
      <li>
        <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
          @csrf
          <button type="submit" class="nav-item-danger">
            <ion-icon name="log-out-outline"></ion-icon>
            <span>Keluar</span>
          </button>
        </form>
      </li>
    </ul>
  </div>
</aside>