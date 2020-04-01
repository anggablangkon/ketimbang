

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
                <b>Visi</b>
                <p>Menjadi sarana media dan komunitas yang berguna bagi masyarakat demi mewujudkan karakteristik manusia yang selalu berusaha.</p>
                <b>Misi</b>
                <ul>
                      <li>
                          1. Memberikan informasi melalui media sosial mengenai keberadaan sosok ketimbang ngemis di pelosok Indonesia.
                      </li>
                      <li>
                          2. Mengadakan bakti sosial kepada sosok yang selalu berusaha keras untuk selalu tidak meminta-minta
                          .
                      </li>
                      <li>3.	Bekerjasama dengan dinas sosial setempat untuk memberikan penyuluhan terhadap pengemis.</li>
                      <li>4.	Membantu mereka sosok ketimbang ngemis secara langsung terjun kelapangan dengan cara ikut memasarkan barang dagangannya atau membantu pekerjaan beliau sebagai sosok ketimbang ngemis.</li>
                      <li>5.	Menjadi tempat penyalur dan memberi kesempatan para donatur untuk ikut menyalurkan donasinya kepada penerima donasi.</li>
                  </ul>
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