@extends('layouts.layout')

@section('title','Ketimbang Ngemis Pandeglang')


@section('content')
    
    &nbsp;
  <!-- Awesome Screens Section Start -->
    <section id="" class="screens-shot section">
      <div class="container">
        <div class="section-header">   
          <div class="row">
            <!-- start content -->
            <div class="col-sm-2">
            </div>
            <div class="col-lg-8">
              <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Post By KNP</p><br/>       
              <h2 class="section-title">{{ $postingan->judul }}</h2>
            </div>
          </div>
        </div>
        <div class="row">

            <!-- start content -->
            <div class="col-sm-2">
            </div>
            <div class="col-lg-8">
              @desktop
              <center>
              <img src="{{ asset($postingan->foto) }}" style="width: 500px; height: 300px;">
              </center>
              @enddesktop
              @mobile
              <img src="{{ asset($postingan->foto) }}" style="width: 100%; height: 250px;">
              @endmobile
              <br/><br/>
              
              <center>
              <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Oleh {{ $postingan->cby }}</p>       
              <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">{{ $postingan->date }}</p>       
              </center>
              <br/>
              <p style="text-align:justify; color:black;">
                {!! $postingan->isi !!}
              </p>

              <br/>
                <b>
                  Share To  :
                  <a href="whatsapp://send?text=https://ketimbangngemispdg.org/lihatdonasi/{{ $postingan->slug }}" target="_blank" class="btn-sm btn-success">Whatsapp</a>
                  <a href="http://www.facebook.com/sharer.php?u=https://ketimbangngemispdg.org/lihatdonasi/{{ $postingan->slug }}" class="btn-sm btn-primary" target="_blank">Facebook</a>
                  <a href="https://twitter.com/share?url=https://ketimbangngemispdg.org/{{ $postingan->slug }}" target="_blank" class="btn-sm btn-info">twitter</a>
                  <!--<a href="https://plus.google.com/share?url=https://ketimbangngemispdg.org/lihatdonasi/{{ $postingan->slug }}" target="_blank" class="btn-sm btn-danger">Google Plus</a>-->
                </b>
                </b>
            </div>
            <!-- end content -->

        </div>
      </div>
    </section>
    <!-- Awesome Screens Section End -->


@endsection