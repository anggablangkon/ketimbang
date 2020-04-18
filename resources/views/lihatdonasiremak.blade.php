@extends('layouts.layout')

@section('title','Ketimbang Ngemis Pandeglang')


@section('content')

&nbsp;
<!-- Awesome Screens Section Start -->
<section id="" class="screens-shot section">
  <div class="container">
    <div class="">   
      <div class="row">
        <!-- start content -->
        <div class="col-lg-7">
          &nbsp;
          <div class="alert alert-success alert-dismissible">
            <h5>#{{ $postingan->judul }}</h5>
            Bantu kami untuk mengumpulkan donasi ini, donasi ini di mulai dari tanggal :
            <br/><b>
              {{ date('d M Y', strtotime($postingan->startdate))}} s/d {{date('d M Y', strtotime($postingan->enddate))}}
              @php
              if($postingan->nominalpencapaian == null){
                $nominal = 0;
              }else{
                $nominal = $postingan->nominalpencapaian;
              }
              @endphp
              <br/>Dengan target pencapaian nominal donasi sebesar Rp. {{ number_format($nominal)}}
            </b>
          </div>    

          @php 
          $enddate = $postingan->enddate;
          $enddate = new DateTime($enddate);
          $today   = new DateTime();
          $selisih = $enddate->diff($today);
          $tgl     = $selisih->d . ' hari lagi';
          @endphp
          @if($tgl == 0)
            <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s" style="background-color: red;"> Donasi sudah ditutup </p><br/>   
          @else
            <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s" style="background-color: red;">Donasi Masih Dibuka {{$tgl}} </p>
            <br/>   
          @endif
          <!--   postingan -->
          @desktop
          <center>
            @if(strlen($postingan->foto) >= 6)
            <img src="{{ asset($postingan->foto) }}" style="width: 100%; height: 300px;">
            @else
            <img src="{{ asset('/imagepost') }}/{{$postingan->id}}.{{$postingan->foto}}" style="width: 100%; height: 300px;">
            @endif
          </center>
          @enddesktop
          @mobile
          @if(strlen($postingan->foto) >= 6)
          <img src="{{ asset($postingan->foto) }}" style="width: 100%" height="300px">
          @else
          <img src="{{ asset('/imagepost') }}/{{$postingan->id}}.{{$postingan->foto}}" style="width: 100%" height="300px">
          @endif
          @endmobile
         {{--  <center>
            <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Post By : {{ $postingan->cby }}</p>       
            <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">{{ $postingan->date }}</p>       
          </center> --}}
          <br/>
          <div style="color: black;">
            <p>Postingan dibuat oleh : <a href="">{{ $postingan->name }} </a> & telah dilihat sebanyak : {{ $postingan->views }} kali</p><hr/>
            {!! $postingan->isi !!}
          </div>
          <br/>
          <b>
            Share To  :
            <a href="whatsapp://send?text=https://ketimbangngemispdg.org/lihatdonasi/{{ $postingan->slug }}" target="_blank" class="btn-sm btn-success">Whatsapp</a>
            <a href="http://www.facebook.com/sharer.php?u=https://ketimbangngemispdg.org/lihatdonasi/{{ $postingan->slug }}" class="btn-sm btn-primary" target="_blank">Facebook</a>
            <a href="https://twitter.com/share?url=https://ketimbangngemispdg.org/lihatdonasi/{{ $postingan->slug }}" target="_blank" class="btn-sm btn-info">twitter</a>
            <!--<a href="https://plus.google.com/share?url=https://ketimbangngemispdg.org/lihatdonasi/{{ $postingan->slug }}" target="_blank" class="btn-sm btn-danger">Google Plus</a>-->
          </b>

        </div>
        <div class="col-lg-5">
          <div class="panel panel-default">
            <div class="panel-body">

              <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="single-team wow fadeInUp" data-wow-delay="0.2s">
                  <div class="team-details">
                    <div class="team-inner">
                      <h4 class="team-title">

                        <p>Bantu KetimbangngemisKnp.com dengan menjadi Fundraiser. Setiap donasi yang Anda kumpulkan akan disalurkan ke "#Orang Yang Membutuhkan". </p>
                        <br/>
                        @if($tgl != 0)
                        <center>
                          <h6>Hubungi Kami Untuk Melakukan Donasi</h6>
                        </center>
                        <a href="https://api.whatsapp.com/send?phone=6283806354663&text=Assalammualaikum%20Admin%20Saya%20Ingin%20Berdonasi%20Untuk%20Projek%20:%20{{ $postingan->slug }}" class="btn btn-success" style="width: 100%"> Whatsapp </a>
                        &nbsp;
                        <a href="https://www.facebook.com/ketimbang.ngemis.pandeglang90" class="btn btn-primary" style="width: 100%"> Facebook </a>
                        &nbsp;
                        <a href="https://www.instagram.com/ketimbang.ngemis.pandeglang/" class="btn btn-danger" style="width: 100%"> Instagram </a>
                        @else
                        <center>
                          <div class="alert alert-danger alert-dismissible">
                            <h6><i class="lni lni-warning"></i> Maaf! Donasi sudah ditutup</h6>
                          </div>
                        </center>
                        @endif
                      </h4>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="single-team wow fadeInUp" data-wow-delay="0.2s">
                  <div class="team-details">
                    <div class="team-inner">
                      <h4 class="team-title">

                        <b>Donasi Lainnya</b>
                        <br/><br/>

                        <ul>
                          <?php $no = 1; ?> 
                          @foreach($donasi as $postingan)
                          <li>{{ $no++ }}. <a href="{{ url('/lihatdonasi') }}/{{ $postingan->slug }}">{{ $postingan->judul }}</a></li>
                          @endforeach
                        </ul>


                      </h4>
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>
        </div>
      </div>
    </div>


      {{--   <div class="row">

            <!-- start content -->
            <div class="col-sm-6">
            </div>
            <div class="col-lg-8">
              @desktop
              <center>
              <img src="{{ asset($postingan->foto) }}" style="width: 500px; height: 300px;">
              </center>
              @enddesktop
              @mobile
              <img src="{{ asset($postingan->foto) }}" style="width: 100%">
              @endmobile
              <br/><br/>
              <center>
              <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Oleh {{ $postingan->cby }}</p>       
              <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">{{ $postingan->date }}</p>       
              </center>
              <br/>
             {!! $postingan->isi !!}
            </div>
            <!-- end content -->

          </div> --}}
        </div>
      </section>
      <!-- Awesome Screens Section End -->


      @endsection