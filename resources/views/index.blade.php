@extends('layouts.layout')

@section('title','Ketimbang Ngemis Pandeglang')

@section('halamanatas')

@desktop
<div class="container">      
  <div class="row space-100">
    <div class="col-lg-8 col-md-12 col-xs-12">
      <div class="contents">
        <h2 class="head-title">Siapa Kami ? <br> </h2>
        <h6>
          Komunitas yang didirikan oleh Rizki Pratama Wijaya seorang mahasiswa dari Jogyakarta yang terinspirasi karena bertemu dengan nenek penjual perabotan rumah tangga pada sholat Jumat. Dari kejadian itu, berbenak dalam pikirannya untuk membuat akun instagram @ketimbang.ngemis tepat pada tanggal 12 Juni 2015.
        </h6>
        <div class="header-button">
          <a href="{{ url('/tentangkami') }}" class="btn btn-border-filled">Kenal Kami Lebih Jauh</a>
          <a href="#screenshots" class="btn btn-border">Program Kegiatan</a>
          <a href="https://www.youtube.com/watch?v=9KaHm7gslPg" target="_blank" class="btn btn-border video-popup">Video Kami</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-12 col-xs-12">
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
      <p style="color: black; font-size: 20px; font-style: bold;">Ketimbang Ngemis Pandeglang</p>
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


<!-- Blog Section -->
  <div class="container">
    <div class="row mt">
      <div class="col-lg-6 col-md-12 col-sm-12">
          <div style="color: black;">
            <p class="btn btn-subtitle">Donasi</p>
            <h3>Ayoo Bantu Kami</h3>
            <p>Jadilah foundraiser terbaik yang memberikan manfaat kepada orang - orang, dengan cara berdonasi untuk membantu orang - orang disekitar kita yang lebih membutuhkan. </p>
            <a class="btn btn-rm" href="{{ url('/aktifitasdonasi') }}">Lihat Donasi<i class="lni-arrow-right"></i></a>
          </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="img-thumb wow fadeInLeft" data-wow-delay="1.2s">
          <img class="img-fluid" src="https://preview.uideck.com/items/proton/img/features/img2.png" alt="">
        </div>
      </div>
    </div>
  </div>
<!-- blog Section End -->
<br/>
@endsection