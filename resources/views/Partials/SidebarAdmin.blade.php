<div class="sidebar" data-background-color="dark">
	<div class="sidebar-logo">
		<!-- Logo Header -->
		<div class="logo-header" data-background-color="dark">
			<a href="index.html" class="logo">
				<img src="{{ asset('assets/halaman_sdg/img/webp/sdg.ico') }}" alt="navbar brand" class="navbar-brand" height="20"/>
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
					<a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
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
							@if (auth()->user()->level === 'admin')
								<li>
									<a href="{{ route('post.index') }}">
										<span class="sub-item">Postingan</span>
									</a>
								</li>
								<li>
									<a href="{{ route('berita.index') }}">
										<span class="sub-item">Berita</span>
									</a>
								</li>
								<li>
									<a href="{{ route('kategori.index') }}">
										<span class="sub-item">Kategori</span>
									</a>
								</li>
								<li>
									<a href="{{ route('produk.index') }}">
										<span class="sub-item">Produk</span>
									</a>
								</li>
								<li>
									<a href="{{ route('order.index') }}">
										<span class="sub-item">Order</span>
									</a>
								</li>
								<li>
									<a href="{{ route('notification.index') }}">
										<span class="sub-item">Notifikasi</span>
									</a>
								</li>
								<li>
									<a href="{{ route('asetkantor.index') }}">
										<span class="sub-item">Aset Kantor</span>
									</a>
								</li>
								<li>
									<a href="{{ route('gudang.index') }}">
										<span class="sub-item">Gudang</span>
									</a>
								</li>
								<li>
									<a href="{{ route('user.index') }}">
										<span class="sub-item">Pengguna</span>
									</a>
								</li>
                    	@elseif (auth()->user()->level === 'user')
							  	<li>
									<a href="{{ route('post.index') }}">
										<span class="sub-item">Postingan</span>
									</a>
								</li>
								<li>
									<a href="{{ route('berita.index') }}">
										<span class="sub-item">Berita</span>
									</a>
								</li>
								<li>
									<a href="{{ route('kategori.index') }}">
										<span class="sub-item">Kategori</span>
									</a>
								</li>
								<li>
									<a href="{{ route('produk.index') }}">
										<span class="sub-item">Produk</span>
									</a>
								</li>
								{{-- <li>
									<a href="{{ route('order.index') }}">
										<span class="sub-item">Order</span>
									</a>
								</li>
								<li>
									<a href="{{ route('notification.index') }}">
										<span class="sub-item">Notifikasi</span>
									</a>
								</li>
								<li>
									<a href="{{ route('asetkantor.index') }}">
										<span class="sub-item">Aset Kantor</span>
									</a>
								</li>
								<li>
									<a href="{{ route('gudang.index') }}">
										<span class="sub-item">Gudang</span>
									</a>
								</li>
								<li>
									<a href="{{ route('user.index') }}">
										<span class="sub-item">Pengguna</span>
									</a>
								</li> --}}
                    	@elseif (auth()->user()->level === 'pekerja')
							  	<li>
									<a href="{{ route('post.index') }}">
										<span class="sub-item">Postingan</span>
									</a>
								</li>
								<li>
									<a href="{{ route('berita.index') }}">
										<span class="sub-item">Berita</span>
									</a>
								</li>
								{{-- <li>
									<a href="{{ route('kategori.index') }}">
										<span class="sub-item">Kategori</span>
									</a>
								</li>
								<li>
									<a href="{{ route('produk.index') }}">
										<span class="sub-item">Produk</span>
									</a>
								</li>
								<li>
									<a href="{{ route('order.index') }}">
										<span class="sub-item">Order</span>
									</a>
								</li>
								<li>
									<a href="{{ route('notification.index') }}">
										<span class="sub-item">Notifikasi</span>
									</a>
								</li>
								<li>
									<a href="{{ route('asetkantor.index') }}">
										<span class="sub-item">Aset Kantor</span>
									</a>
								</li>
								<li>
									<a href="{{ route('gudang.index') }}">
										<span class="sub-item">Gudang</span>
									</a>
								</li>
								<li>
									<a href="{{ route('user.index') }}">
										<span class="sub-item">Pengguna</span>
									</a>
								</li> --}}
							@else
								 <li>
									<a href="">
										<span class="sub-item">Anda belum mempunyai menu, kontak admin untuk menu</span>
									</a>
								</li>
								{{--<li>
									<a href="{{ route('berita.index') }}">
										<span class="sub-item">Berita</span>
									</a>
								</li>
								<li>
									<a href="{{ route('kategori.index') }}">
										<span class="sub-item">Kategori</span>
									</a>
								</li>
								<li>
									<a href="{{ route('produk.index') }}">
										<span class="sub-item">Produk</span>
									</a>
								</li>
								<li>
									<a href="{{ route('order.index') }}">
										<span class="sub-item">Order</span>
									</a>
								</li>
								<li>
									<a href="{{ route('notification.index') }}">
										<span class="sub-item">Notifikasi</span>
									</a>
								</li>
								<li>
									<a href="{{ route('asetkantor.index') }}">
										<span class="sub-item">Aset Kantor</span>
									</a>
								</li>
								<li>
									<a href="{{ route('gudang.index') }}">
										<span class="sub-item">Gudang</span>
									</a>
								</li>
								<li>
									<a href="{{ route('user.index') }}">
										<span class="sub-item">Pengguna</span>
									</a>
								</li> --}}
                    	@endif
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Sidebar -->

