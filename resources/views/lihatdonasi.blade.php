@extends('layouts.layout')

@section('title','Ketimbang Ngemis Pandeglang')

@section('css')
  <style type="text/css">
    .kokitindo {
      width: 100%; 
      font-size: 12px; 
      border-radius: 0px;
      padding: 6px;
    }
  </style>
@endsection

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
            <p>
              Bantu knpandeglang.com dengan menjadi Fundraiser. Setiap donasi yang Anda kumpulkan akan disalurkan ke "#Orang Yang Membutuhkan". 
            </p>
          </div>    

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
            <a href="whatsapp://send?text=https://knpandeglang.com/lihatdonasi/{{ $postingan->slug }}" target="_blank" class="btn-sm btn-success">Whatsapp</a>
            <a href="http://www.facebook.com/sharer.php?u=https://knpandeglang.com/lihatdonasi/{{ $postingan->slug }}" class="btn-sm btn-primary" target="_blank">Facebook</a>
            <a href="https://twitter.com/share?url=https://knpandeglang.com/lihatdonasi/{{ $postingan->slug }}" target="_blank" class="btn-sm btn-info">twitter</a>
            <!--<a href="https://plus.google.com/share?url=https://knpandeglang.com/lihatdonasi/{{ $postingan->slug }}" target="_blank" class="btn-sm btn-danger">Google Plus</a>-->
          </b>

        </div>
        <div class="col-lg-5">
          <div class="panel panel-default">
            <div class="panel-body">

              <br/>
              
              @desktop
              <div class="card bg-light text-dark">
                <div class="card-body">

                  <div class="team-details">
                    <div class="team-inner">
                      <h4 class="team-title">

                        <center>
                          <h6>Hubungi Kami Untuk Melakukan Donasi</h6>
                        </center>
                        <a href="https://api.whatsapp.com/send?phone=6283806354663&text=Assalammualaikum%20Admin%20Saya%20Ingin%20Berdonasi%20Untuk%20Projek%20:%20{{ $postingan->slug }}" class="btn btn-success kokitindo"> Whatsapp </a>
                        <a href="https://www.facebook.com/ketimbang.ngemis.pandeglang90" class="btn btn-primary kokitindo" style="width: 100%; font-size: 12px;" > Facebook </a>
                        <a href="https://www.instagram.com/ketimbang.ngemis.pandeglang/" class="btn btn-danger kokitindo" style="width: 100%; font-size: 12px;"> Instagram </a>

                      </h4>
                    </div>
                  </div>
                
                </div>
              </div>
              @enddesktop

                <br/>
                <div class="card bg-light text-dark">
                <div class="card-body">
                  <div class="team-details">
                    <div class="team-inner">
                      <h6 class="team-title">

                        <b>Donasi Lainnya</b>
                        <br/><br/>
                        <ul>
                          <?php $no = 1; ?> 
                          @foreach($donasi as $postingan)
                          <li>{{ $no++ }}. <a href="{{ url('/lihatdonasi') }}/{{ $postingan->slug }}">{{ $postingan->judul }}</a></li>
                          @endforeach
                        </ul>

                      </h6>
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