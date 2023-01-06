<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/image/logopoli.png') }}" alt class="w-px-40 h-auto rounded-circle mt-2 mb-2" />
            </span>
            <small class="app-brand-text demo menu-text fw-bolder ms-2">Sistem Pendukung <br>Keputusan Pemilihan<br>
                Prodi PNP</small>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ $active === 'admin' ? 'active' : '' }}">
            <a href="/admin" class="menu-link">
                <i class='menu-icon bx bxs-dashboard'></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <!-- Sekolah -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Jurusan</span>
        </li>
        <li class="menu-item <?php
        if (isset($active)) {
            if ($active == 'jurusan') {
                echo $active == 'jurusan' ? 'active' : '';
            } elseif ($active == 'prodi') {
                echo $active == 'prodi' ? 'active' : '';
            }
        }
        ?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bxs-buildings'></i>
                <div data-i18n="Account Settings">Data Kampus</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ $active === 'jurusan' ? 'active' : '' }}">
                    <a href="/admin/jurusan" class="menu-link">
                        <div data-i18n="Basic">Jurusan</div>
                    </a>
                </li>
                <li class="menu-item {{ $active === 'prodi' ? 'active' : '' }}">
                    <a href="/admin/prodi" class="menu-link">
                        <div data-i18n="Basic">Prodi</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item {{ $active === 'sekolah' ? 'active' : '' }}">
            <a href="/admin/jurusan-sekolah" class="menu-link">
                <i class='menu-icon bx bxs-school'></i>
                <div data-i18n="Authentications">Data Sekolah</div>
            </a>
        </li>
        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Metode</span></li>
        <!-- Cards -->
        <li class="menu-item {{ $active === 'kriteria' ? 'active' : '' }}">
            <a href="/admin/kriteria" class="menu-link">
                <i class='menu-icon bx bx-task'></i>
                <div data-i18n="Basic">Kriteria</div>
            </a>
        </li>
        <li class="menu-item {{ $active === 'pertanyaan' ? 'active' : '' }} ">
            <a href="/admin/pertanyaan" class="menu-link">
                <i class='menu-icon bx bx-search-alt'></i>
                <div data-i18n="Basic">Pertanyaan</div>
            </a>
        </li>
        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Cek Jurusan</span></li>
        <!-- Extended components -->
        <li class="menu-item {{ $active === 'cek_jurusan' ? 'active' : '' }}">
          <a href="/rekomendasi" class="menu-link">
            <i class='menu-icon bx bx-user'></i>
            <div data-i18n="Perfect Scrollbar">Cek Jurusan</div>
          </a>
        </li>
    </ul>
</aside>
