<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="/" class="app-brand-link">
      <span class="app-brand-logo demo">
        <img src="{{ asset('assets/image/logopoli.png') }}" alt class="w-px-40 h-auto rounded-circle mt-2 mb-2" />
      </span>
      <span class="app-brand-text demo menu-text fw-bolder ms-2">Tim3</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item active">
      <a href="#" class="menu-link">
        <i class="menu-icon fa-solid fa-gauge"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>
    <!-- Sekolah -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Jurusan</span>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon fa-solid fa-school-flag"></i>
        <div data-i18n="Account Settings">Data Kampus</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Account">Jurusan</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Notifications">Prodi</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon fa-solid fa-school"></i>
        <div data-i18n="Authentications">Data Sekolah</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="#" class="menu-link" target="_blank">
            <div data-i18n="Basic">Jurusan</div>
          </a>
        </li>
      </ul>
    </li>
    <!-- Components -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Metode</span></li>
    <!-- Cards -->
    <li class="menu-item">
      <a href="cards-basic.html" class="menu-link">
        <i class="menu-icon fa-solid fa-list-check"></i>
        <div data-i18n="Basic">Kriteria</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="cards-basic.html" class="menu-link">
        <i class="menu-icon fa-solid fa-clipboard-question"></i>
        <div data-i18n="Basic">Pertanyaan</div>
      </a>
    </li>
    <!-- Components -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">User</span></li>
    <!-- Extended components -->
    <li class="menu-item">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon fa-solid fa-users"></i>
        <div data-i18n="Extended UI">Data User</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Perfect Scrollbar">List Pengguna</div>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</aside>