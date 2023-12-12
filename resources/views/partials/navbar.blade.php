<section class="sticky-xl-top bg-white border-bottom border-accent-color">
    <div class="r-container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler accent-color-1-color border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 font-2 fw-semibold gap-lg-3">
                        <li class="nav-item">
                            <a class="nav-link fs-6 {{ ($title === "Permintaan Aplikasi") ? 'active' : '' }} text-center" aria-current="page" href="permintaan">Permintaan Aplikasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-6 {{ ($title === "Inventaris Bangsis") ? 'active' : '' }} text-center" href="inventaris">Inventaris Bangsis</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fs-6 text-center {{ ($title === 'Laporan Kegiatan') ? 'active' : '' }} {{ ($title === 'Rapat Resume') ? 'active' : '' }} {{ ($title === 'Rapat Nodin') ? 'active' : '' }} {{ ($title === 'Rapat Notulen') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Laporan
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item fs-6" href="kegiatan">Kegiatan</a></li>
                                <li><a class="dropdown-item fs-6 {{ ($title === 'Rapat Resume') ? 'active' : '' }}" href="#">Rapat
                                    </a>
                                    <ul class=" dropdown-submenu">
                                        <li><a class="dropdown-item fs-6" href="resume">&raquo; Resume</a></li>
                                        <li><a class="dropdown-item fs-6" href="nodin">&raquo; Nodin</a></li>
                                        <li><a class="dropdown-item fs-6" href="notulen">&raquo; Notulen</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fs-6 text-center {{ ($title === 'Digitalisasi Dokumen Peraturan') ? 'active' : '' }} {{ ($title === 'Digitalisasi Dokumen Naskah') ? 'active' : '' }} {{ ($title === 'Digitalisasi Dokumen Paparan') ? 'active' : '' }} {{ ($title === 'Rapat Notulen') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Digitalisasi Dokumen
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item fs-6 " href="peraturan">Peraturan</a></li>
                                <li><a class="dropdown-item fs-6 " href="naskah">Naskah</a></li>
                                <li><a class="dropdown-item fs-6 " href="paparan">Paparan</a></li>
                                {{-- <li><a class="dropdown-item" href="single_post.html">Single Post</a></li>
                                <li><a class="dropdown-item" href="404.html">404</a></li> --}}
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-6 {{ ($title === 'Lapkonis Sisfo') ? 'active' : '' }} text-center" href="sisfo">Lapkonis Sisfo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-6 {{ ($title === 'Laporan Kinerja') ? 'active' : '' }} text-center" href="kinerja">Laporan Kinerja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-6 {{ ($title === 'Magang Mahasiswa') ? 'active' : '' }} text-center" href="magang">Magang Mahasiswa</a>
                        </li>

                        @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fs-6 {{ ($title === 'Laporan Kegiatan') ? 'active' : '' }} text-center" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Selamat Datang <br>{{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item fs-6" href="data">Dashboard</a></li>
                                <button class="dropdown-item fs-6">
                                    <form action="logout" method="get"></form>
                                    <a class="text-black" href="logout">Log Out</a>
                                </button>
                            </ul>
                        </li>
                            @else       
                            <li class="nav-item">
                                <a class="nav-link fs-6 {{ ($title === 'Halaman Login') ? 'active' : '' }}" href="login">Login</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>