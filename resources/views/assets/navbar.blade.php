
      <div class="overlay"></div>
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <a href="{{ url('/') }}" class="navbar-brand"><img src="{{ asset('/images/knp.PNG') }}" style="width: 50px;" alt=""></a>  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="{{ url('/') }}">HOME</a>
              </li>{{-- 
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#app-features">BERANDA</a>
              </li>   --}}
              <li class="nav-item">
                <a class="nav-link page-scroll" href="{{ url('/tentangkami') }}">TENTANG KAMI</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link page-scroll" href="{{ url('/kontakkami') }}">KONTAK KAMI</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link page-scroll" href="{{ url('/rancangankerja') }}">RANCANGAN KERJA</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link page-scroll" href="{{ url('/aktifitasdandonasi') }}">AKTIVITAS DAN DONASI</a>
              </li> 
              @if (Route::has('login'))
                @auth
                <li class="nav-item">
                  <a class="nav-link page-scroll" href="{{ url('/login') }}">DASHBOARD</a>
                </li>
                @else 
                <li class="nav-item">
                  <a class="nav-link page-scroll" href="{{ url('/login') }}">LOGIN</a>
                </li>
                @endauth
              @endif
               {{-- 
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#download">Download</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#map-area">Contact</a> --}}
              </li> 
            </ul>
          </div>
        </div>
      </nav>