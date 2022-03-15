<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/spsm" class="brand-link">
        <img src="http://jawatankosongkerajaanterkini.net/wp-content/uploads/2020/10/Jawatan-Kosong-Jabatan-Ukur-dan-Pemetaan-Malaysia-Oktober-2020.png"
            alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">JUPEM - SPSM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/spsm/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        {{-- <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item {{ request()->is('spsm') ? 'menu-open' : '' }}">
                    <a href="/spsm" class="nav-link {{ request()->is('spsm') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                {{-- Halaman --}}
                <li class="nav-item {{ request()->is('spsm/admin/page/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('spsm/admin/page/*') ? 'active' : '' }}">
                        <i class="nav-icon far fa-file"></i>
                        <p>
                            Halaman
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/spsm/admin/page/create" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah Baru</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spsm/admin/page/" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Senarai Halaman</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Media --}}
                <li class="nav-item {{ request()->is('spsm/admin/media') ? 'menu-open' : '' }}">
                    <a href="/spsm/admin/media/"
                        class="nav-link {{ request()->is('spsm/admin/media') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-photo-video"></i>
                        <p>
                            Media
                            {{-- <i class="fas fa-angle-left right"></i> --}}
                        </p>
                    </a>
                    {{-- <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/spsm/admin/media/upload" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah Media</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spsm/admin/media/" class="nav-link">
                                <i class="fas fa-list-ul nav-icon"></i>
                                <p>Koleksi Media</p>
                            </a>
                        </li>
                    </ul> --}}
                </li>
                {{-- Slider --}}
                <li class="nav-item {{ request()->is('spsm/admin/slider/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('spsm/admin/slider/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-scroll"></i>
                        <p>
                            Slider
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/spsm/admin/slider/create" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah Slider</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spsm/admin/slider/list" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Senarai Slider</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Popup --}}
                <li class="nav-item {{ request()->is('spsm/admin/popup/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('spsm/admin/popup/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-asterisk"></i>
                        <p>
                            Popup
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/spsm/admin/popup/create" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah Popup</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spsm/admin/popup/" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Senarai Popup</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ request()->is('spsm/admin/pengumuman/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('spsm/admin/pengumuman/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-bullhorn"></i>
                        <p>
                            Pengumuman
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/spsm/admin/pengumuman/create" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah Pengumuman</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spsm/admin/pengumuman/" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Senarai Pengumuman</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Direktori Pegawai --}}
                <li class="nav-item {{ request()->is('/spsm/admin/pegawai/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('/spsm/admin/pegawai/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Pegawai
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/spsm/admin/pegawai/create" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah Pegawai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spsm/admin/pegawai/tukar" class="nav-link">
                                <i class="fas fa-exchange-alt nav-icon"></i>
                                <p>Tukar Pegawai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spsm/admin/pegawai/" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Senarai Pegawai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spsm/admin/pegawai/gred" class="nav-link">
                                <i class="fas fa-list-ul nav-icon"></i>
                                <p>Gred Pegawai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-list-ul nav-icon"></i>
                                <p>Jabatan/Unit</p>
                                <i class="fas fa-angle-left right"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/spsm/admin/jabatan/" class="nav-link">
                                        <i class="fas fa-list-alt nav-icon"></i>
                                        <p>Senarai Jabatan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/spsm/admin/jabatan/create" class="nav-link">
                                        <i class="fas fa-plus nav-icon"></i>
                                        <p>Tambah Jabatan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/spsm/admin/jabatan/susunan" class="nav-link">
                                        <i class="fas fa-stream nav-icon"></i>
                                        <p>Susunan Jabatan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                {{-- Keratan Akhbar --}}
                <li class="nav-item {{ request()->is('spsm/admin/newspaper/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('spsm/admin/newspaper/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Keratan Akhbar
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/spsm/admin/newspaper/create" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah Keratan Akbar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spsm/admin/newspaper/" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Senarai Keratan Akhbar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Pekeliling --}}
                <li class="nav-item {{ request()->is('spsm/admin/pekeliling/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('spsm/admin/pekeliling/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-exclamation-circle"></i>
                        <p>
                            Pekeliling
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/spsm/admin/pekeliling/create" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah Pekeliling</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spsm/admin/pekeliling/kategori" class="nav-link">
                                <i class="far fa-square nav-icon"></i>
                                <p>Kategori Pekeliling</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spsm/admin/pekeliling/" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Senarai Pekeliling</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Sebut Harga --}}
                <li class="nav-item {{ request()->is('spsm/admin/quote/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('spsm/admin/quote/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-comment-dollar"></i>
                        <p>
                            Sebut Harga
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/spsm/admin/quote/create" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah Sebut Harga</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spsm/admin/quote/" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Senarai Sebut Harga</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Tender --}}
                <li class="nav-item {{ request()->is('spsm/admin/tender/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('spsm/admin/tender/*') ? 'active' : '' }}">
                        <i class="nav-icon far fa-object-ungroup"></i>
                        <p>
                            Tender
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/spsm/admin/tender/create" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah Tender</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spsm/admin/tender/" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Senarai Tender</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Buletin GIS --}}
                <li class="nav-item {{ request()->is('spsm/admin/gis/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('spsm/admin/gis/*') ? 'active' : '' }}">
                        <i class="nav-icon far fa-comment-alt"></i>
                        <p>
                            Buletin GIS
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/spsm/admin/gis/create" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah Buletin GIS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spsm/admin/gis/" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Senarai Buletin GIS</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Laporan Tahunan --}}
                <li class="nav-item {{ request()->is('spsm/admin/annualreport/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('spsm/admin/annualreport/*') ? 'active' : '' }}">
                        <i class="nav-icon far fa-file-alt"></i>
                        <p>
                            Laporan Tahunan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/spsm/admin/laporan_tahunan/create" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah Laporan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spsm/admin/laporan_tahunan/" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Senarai Laporan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Laporan Mesyuarat --}}
                <li class="nav-item {{ request()->is('spsm/admin/laporan_mesyuarat/*') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->is('spsm/admin/laporan_mesyuarat/*') ? 'active' : '' }}">
                        <i class="nav-icon far fa-file-alt"></i>
                        <p>
                            Laporan Mesyuarat
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/spsm/admin/laporan_mesyuarat/create" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah Laporan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spsm/admin/laporan_mesyuarat/" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Senarai Laporan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Berita Ukur --}}
                <li class="nav-item {{ request()->is('spsm/admin/berita_ukur/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('spsm/admin/berita_ukur/*') ? 'active' : '' }}">
                        <i class="nav-icon far fa-comment-alt"></i>
                        <p>
                            Berita Ukur
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/spsm/admin/berita_ukur/create" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spsm/admin/berita_ukur/" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Senarai Berita</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Kertas Kerja --}}
                <li class="nav-item {{ request()->is('spsm/admin/kertas_kerja/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('spsm/admin/kertas_kerja/*') ? 'active' : '' }}">
                        <i class="nav-icon far fa-file-pdf"></i>
                        <p>
                            Kertas Kerja
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/spsm/admin/kertas_kerja/create" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spsm/admin/kertas_kerja/" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Senarai</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Piagam Pelanggan --}}
                <li class="nav-item {{ request()->is('spsm/admin/piagam_pelanggan/*') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->is('spsm/admin/piagam_pelanggan/*') ? 'active' : '' }}">
                        <i class="nav-icon fab fa-creative-commons-nd"></i>
                        <p>
                            Piagam Pelanggan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/spsm/admin/piagam_pelanggan/create" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spsm/admin/piagam_pelanggan/" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Senarai</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Jadual Peperiksaan --}}
                <li class="nav-item {{ request()->is('spsm/admin/exam/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('spsm/admin/exam/*') ? 'active' : '' }}">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Jadual Peperiksaan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/spsm/admin/page/create" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spsm/admin/page/" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Senarai</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Buku
                <li class="nav-item {{ request()->is('spsm/admin/buku/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('spsm/admin/buku/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Buku
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/spsm/admin/page/create" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spsm/admin/page/" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Senarai</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                {{-- Galeri --}}
                <li class="nav-item {{ request()->is('spsm/admin/galeri/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('spsm/admin/galeri/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-photo-video"></i>
                        <p>
                            Galeri
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/spsm/admin/page/create" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah Galeri</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spsm/admin/page/" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Senarai Galeri</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ request()->is('spsm/admin/maklum_balas/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('spsm/admin/maklum_balas/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-ticket-alt"></i>
                        <p>
                            Maklum Balas
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/spsm/admin/maklum_balas/list" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Senarai</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">Tetapan</li>
                <li class="nav-item {{ request()->is('spsm/admin/settings/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('spsm/admin/settings/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Umum
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Status
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-list-ul nav-icon"></i>
                                        <p>Tambah</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-list-ul nav-icon"></i>
                                        <p>Senarai</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item {{ request()->is('spsm/admin/piagam/*') ? 'active' : '' }}">
                            <a href="#" class="nav-link {{ request()->is('spsm/admin/piagam/*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Page
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-plus nav-icon"></i>
                                        <p>Tambah</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-list-ul nav-icon"></i>
                                        <p>Senarai</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item {{ request()->is('spsm/admin/user/*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ request()->is('spsm/admin/user/*') ? 'active' : '' }}">
                                <i class="fas fa-users-cog nav-icon"></i>
                                <p>
                                    Users
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-plus nav-icon"></i>
                                        <p>Tambah</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-list-ul nav-icon"></i>
                                        <p>Senarai</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item {{ request()->is('spsm/admin/log/*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ request()->is('spsm/admin/log/*') ? 'active' : '' }}">
                                <i class="fas fa-clipboard-list nav-icon"></i>
                                <p>
                                    Log
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-list-ul nav-icon"></i>
                                        <p>Senarai</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
