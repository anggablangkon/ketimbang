@extends('layouts.layout')

@section('title','Ketimbang Ngemis Pandeglang')

@section('halamanatas')

    @desktop
    <div class="container">      
        <div class="row space-100">
          <div class="col-lg-7 col-md-12 col-xs-12">
            <div class="contents">
              <h2 class="head-title">Siapa Kami ? <br> </h2>
              <h6>
                Komunitas yang didirikan oleh Rizki Pratama Wijaya seorang mahasiswa dari Jogyakarta yang terinspirasi karena bertemu dengan nenek penjual perabotan rumah tangga pada sholat Jumat. Dari kejadian itu, berbenak dalam pikirannya untuk membuat akun instagram @ketimbang.ngemis tepat pada tanggal 12 Juni 2015.
              </h6>
              <div class="header-button">
                <a href="{{ url('/tentangkami') }}" class="btn btn-border-filled">Kenal Kami Lebih Jauh</a>
                <a href="#screenshots" class="btn btn-border">Program Kegiatan</a>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="intro-img">
              <center>
              <img src="{{ asset('images/knp.PNG') }}" style="height: 250px;" alt="">
              </center>
            </div>            
          </div>
        </div> 
    </div>  
    @enddesktop

    @mobile
    <center>
    <div class="container">      
        <div class="row space-100">
          <div class="col-lg-7 col-md-12 col-xs-12">
            <div class="contents">
              &nbsp;
              <h2 class="head-title">Siapa Kami ? <br> </h2>
              <h6>
                Komunitas yang didirikan oleh Rizki Pratama Wijaya seorang mahasiswa dari Jogyakarta yang terinspirasi karena bertemu dengan nenek penjual perabotan rumah tangga pada sholat Jumat. Dari kejadian itu, berbenak dalam pikirannya untuk membuat akun instagram @ketimbang.ngemis tepat pada tanggal 12 Juni 2015.
              </h6>
              <div class="header-button">
                <a href="{{ url('/tentangkami') }}" class="btn btn-border-filled">Kenal Kami Lebih Jauh</a>
                <a href="{{ url('/rancangankerja') }}" class="btn btn-border">Program Kegiatan</a>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="intro-img">
               <img src="{{ asset('images/knp.PNG') }}" style="height: 250px;" alt="">
            </div>            
          </div>
        </div> 
    </div>  
    </center>
    <br/>
    @endmobile

@endsection

@section('content')

  <!-- Awesome Screens Section Start -->
    <section id="screenshots" class="screens-shot section">
      <div class="container">
        <div class="section-header">   
          <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Pengurus</p>       
          <h2 class="section-title">Ketimbang Ngemis Pandeglang</h2>
        </div>
        <div class="row">
          <div class="touch-slider owl-carousel">

            @foreach($anggota as $tampil)
            <!-- start content -->
            <div class="col-lg-12 col-md-12 col-xs-12">
              <div class="single-team wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-thumb">
                  <img src="{{ asset($tampil->foto) }}" style="width: 100%; height: 200px;" alt="">
                  <ul class="social-list">
                    <li class="facebook"><a href="https://www.facebook.com/search/top/?q={{ $tampil->fb }}" target="_blank"><i class="lni-facebook-filled"></i></a></li>
                    <li class="twitter"><a href="https://twitter.com/{{ $tampil->email }}" target="_blank"><i class="lni-twitter-filled"></i></a></li>
                    <li class="instagram"><a href="https://www.instagram.com/{{ $tampil->ig }}/" target="_blank"><i class="lni-instagram-filled"></i></a></li>
                  </ul>
                </div>
                <div class="team-details">
                  <div class="team-inner">
                    <h4 class="team-title">{{ $tampil->nama }}</h4>
                    <p>{{ $tampil->statusanggota }}</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- end content -->
            @endforeach

          </div>
        </div>
      </div>
    </section>
    <!-- Awesome Screens Section End -->

    <!-- Start Video promo Section -->
    <section class="video-promo section">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="video-promo-content text-center">
                <a href="https://www.youtube.com/watch?v=9KaHm7gslPg" class="video-popup" target="_blank"><i class="lni-film-play"></i></a>
                <h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Video Kami</h2>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Video Promo Section --> 

    <!-- Awesome Screens Section Start -->
    <section id="screenshots" class="screens-shot section">
      <div class="container">
        <div class="section-header">   
          <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Post By KNP</p>       
          <h2 class="section-title">Aktivitas dan Kegiatan Ketimbang Ngemis Pandeglang</h2>
        </div>
        <div class="row">
          <div class="touch-slider owl-carousel">

          
          @foreach($blogs as $tampil)

            <!-- start content -->
            <a href="{{ url('/bacapostingan') }}/{{ $tampil->slug }}">
            <div class="col-lg-12 col-md-12 col-xs-12">
              <div class="single-team wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-thumb">
                    <img src="{{ asset($tampil->foto) }}" title="{{ $tampil->judul }}" alt="" style="width: 100%; height: 200px;">
                </div>
                <div class="team-details">
                  <div class="team-inner">
                    <h4 class="team-title">{{ substr($tampil->judul, 0, 30) }} ..</h4>
                    <p>Post By : {{ $tampil->cby }}</p>
                  </div>
                </div>
              </div>
            </div>
            </a>
            <!-- end content -->

            @endforeach

          </div>
        </div>
      </div>
    </section>
    <!-- Awesome Screens Section End -->


    <!-- Blog Section -->
    <section id="blog" class="section">
              <!-- Container Starts -->
              <div class="container">
                 <div class="section-header">   
                  <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Donasi Sosial</p>       
                  <h2 class="section-title">Mari Berdonasi</h2>
                </div>

                <div class="row">
                  
                @foreach($donasi as $tampil)
                <a href="{{ url('/lihatdonasi') }}/{{ $tampil->slug }}">
                  <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper">
                      <div class="blog-item-img">
                          <img src="{{ asset($tampil->foto) }}" style="height: 200px" alt="">
                      </div>
                      <div class="blog-item-text"> 
                        <h3><a href="{{ url('/lihatdonasi') }}/{{ $tampil->slug }}">{{ $tampil->judul }}</a></h3>
                        <div class="author">
                          <span class="name"><a href="#">Post by : {{ $tampil->cby }}</a></span>
                          <span class="date float-right">{{ $tampil->date }}</span>
                        </div>
                      </div>
                    </div>
                    <!-- Blog Item Wrapper Ends-->
                  </div>
                </a>
                @endforeach

              
                </div>
              </div>

              <center>
                <a href="{{ url('/aktifitasdandonasi') }}" class="btn btn-subtitle wow fadeInDown">LIHAT SEMUA</a>
              </center>
    </section>
    <!-- blog Section End -->

@endsection