<aside class="sidebar">
  <div class="sidebar-brand">
    <a href="../beranda" class="logo">
      <img src="{{ asset('assets/img/logosss.png') }}" alt="Logo Seruli" class="logo-img" />
      <span class="logo-text">Seruli</span>
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
        <a href="#" class="nav-item">
          <ion-icon name="newspaper-outline"></ion-icon>
          <span>Kelola Berita</span>
        </a>
      </li>
      <li>
        <a href="#" class="nav-item">
          <ion-icon name="images-outline"></ion-icon>
          <span>Kelola Galeri</span>
        </a>
      </li>
      <li>
        <a href="#" class="nav-item">
          <ion-icon name="help-circle-outline"></ion-icon>
          <span>Kelola FAQ</span>
        </a>
      </li>
    </ul>
  </div>

  <div class="sidebar-footer">
    <li>
        <a href="#" class="nav-item">
          <ion-icon name="help-circle-outline"></ion-icon>
          <span>Kelola FAQ</span>
        </a>
      </li>
    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <button type="submit" class="btn-logout" style="background: none; border: none; width: 100%; cursor: pointer;">
        <ion-icon name="log-out-outline"></ion-icon>
        <span>Keluar</span>
      </button>
    </form>
  </div>
</aside>