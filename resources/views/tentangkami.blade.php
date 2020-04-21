

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
              <!--<p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">TENTANG KAMI</p>-->
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
              <!--<img src="{{ asset('images/knp.PNG') }}" style="width: 300px; height: 300px;">-->
              </center>
              @enddesktop
              @mobile
              <!--<img src="{{ asset('images/knp.PNG') }}" style="width: 100%; height: 400px;">-->
              @endmobile
              <center>
              <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">TENTANG KAMI</p>       
              <!--<p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s"></p>       -->
              </center>
              <br/>
              <p style="text-align:justify;">
                {!! $layouts->isi !!}
              </p>

              <br/>
                <b>
                  Share To  :
                  <a href="whatsapp://send?text=http://knp/public/lihatdonasi/{{ url('/tentangkami') }}" target="_blank" class="btn-sm btn-success">Whatsapp</a>
                  <a href="http://www.facebook.com/sharer.php?u=http://knp/public/lihatdonasi/{{ url('/tentangkami') }}" class="btn-sm btn-primary" target="_blank">Facebook</a>
                  <a href="https://twitter.com/share?url=http://knp/public/lihatdonasi/{{ url('/tentangkami') }}" target="_blank" class="btn-sm btn-info">twitter</a>
                  <!--<a href="https://plus.google.com/share?url=http://knp/public/lihatdonasi/{{ url('/tentangkami') }}" target="_blank" class="btn-sm btn-danger">Google Plus</a>-->
                </b>
                </b>
            </div>
            <!-- end content -->

        </div>
      </div>
    </section>
    <!-- Awesome Screens Section End -->


@endsection