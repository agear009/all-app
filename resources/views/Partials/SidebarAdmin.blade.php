
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img
                src="{{asset('assets/halaman_sdg/img/webp/sdg.ico')}}"
                alt="navbar brand"
                class="navbar-brand"
                height="20"
                />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
            </div>
            <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                <a
                    data-bs-toggle="collapse"
                    href="#dashboard"
                    class="collapsed"
                    aria-expanded="false"
                >
                    <i class="fas fa-home"></i>
                    <p>Dashboard</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse" id="dashboard">
                    <ul class="nav nav-collapse">
                    <li>
                        <a href="../demo1/index.html">
                        <span class="sub-item">Dashboard Utama</span>
                        </a>
                    </li>
                    </ul>
                </div>
                </li>
                <li class="nav-section">
                <span class="sidebar-mini-icon">
                    <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Menu</h4>
                </li>
                <li class="nav-item">
                <a data-bs-toggle="collapse" href="#base">
                    <i class="fas fa-layer-group"></i>
                    <p>Control</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse" id="base">
                    <ul class="nav nav-collapse">
                    <li>
                        <a href="/post">
                        <span class="sub-item">Postingan</span>
                        </a>
                    </li>
                    <li>
                        <a href="/berita">
                        <span class="sub-item">Berita</span>
                        </a>
                    </li>
                    <li>
                        <a href="/kategori">
                        <span class="sub-item">Kategori</span>
                        </a>
                    </li>
                    <li>
                        <a href="/produk">
                        <span class="sub-item">Produk</span>
                        </a>
                    </li>
                    <li>
                        <a href="/notification">
                        <span class="sub-item">Notifikasi</span>
                        </a>
                    </li>
                    <li>
                        <a href="/asetkantor">
                        <span class="sub-item">Aset Kantor</span>
                        </a>
                    </li>
                    <li>
                        <a href="/gudang">
                        <span class="sub-item">Gudang</span>
                        </a>
                    </li>
                    <li>
                        <a href="/user">
                        <span class="sub-item">Pengguna</span>
                        </a>
                    </li>
                    </ul>
                </div>
                </li>

            </ul>
            </div>
        </div>
        </div>
        <!-- End Sidebar -->

