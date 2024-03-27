<div id="header">
      <nav class="navbar navbar-expand-lg" style="background: rgb(63, 60, 214)">
          <div class="container">
            <a class="navbar-brand" href="/beranda">
                <img src="{{ asset('assets/img/logo.png') }}" width="50px" height="50px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
              <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/beranda" style="color: white">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="/profil" style="color: white">Profil Sekolah</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                    Informasi
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                    <li><a class="dropdown-item" href="/berita">Berita</a></li>
                    <li><a class="dropdown-item" href="#">Guru & Karyawan</a></li>
                    <li><a class="dropdown-item" href="#">Fasilitas</a></li>
                  </ul>
                </li>
                @auth
                <li class="nav-item">
                  <a class="nav-link" href="/olah-berita" style="color: white">Olah Berita</a>
                </li>
                @endauth
              </ul>
              <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                    Welcome back, {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                    <li><a class="dropdown-item" href="#">My Dashboard</a></li>
                    <li><hr class="dropdown-devider"></li>
                    <li>
                      <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                      </form>
                    </li>
                  </ul>
                </li>
              @else                  
                <li class="nav-item">
                  <button class="btn btn-sm btn-primary" type="button" onclick="window.location.href='/login'">Login</button>
                </li>
                <li class="nav-item">
                  <button class="btn btn-sm btn-outline-warning" type="button" style="margin-left: 10px" onclick="window.location.href='/register'">Register</button>
                </li>
                @endauth
              </ul>
            </div>
          </div>
        </nav>
    </div>