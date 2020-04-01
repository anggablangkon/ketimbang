

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
              <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">RANCANGAN KERJA</p>       
              <!--<p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s"></p>       -->
              </center>
              <br/>
              <p style="text-align:justify;">
                <font style="font-size:20px;"><b>KEGIATAN RUTIN</b></font>
                <p>Menemukan dan memposting profil sosok mulia sebanyak 2 sosok dalam 1 bulan. (2 minggu 1 sosok)
                    Melakukan survey/eksekusi langsung (penyaluran donasi) terhadap 2 sosok tsb. Bentuk donasi untuk setiap sosok yaitu uang tunai senilai Rp.100.000 dan sembako senilai Rp. 100.000. Jadi untuk 2 sosok dalam satu bulan kita perlu kas sebanyak Rp.400.000/bulan.Jadi 1 sosok 2kali posting di sosmed yaitu profil dan penyaluran donasi</p>
        <br/>
        <font style="font-size:20px;"><b>RENCANA KERJA BERDASARKAN HASIL RAPAT:</b></font><br/><br/>
        <ol>

        <li> <b>Ketua</b><br/>
        
            Membuat grup WA untuk Pengurus dan anggota
            Mengkordinasikan tiap-tiap perangkat pengurus untuk membuat dan merapihkan rencana kerja sebelum mulai dijalankan bulan November.
            Mengingatkan semua anggota untuk mencari 1 sosok/bulan dan membayar uang kas minimal Rp.20.000/bulan dan dimulai diaktifkan bulan November.
        </li>
        
        <li><b>Sekretaris</b> <br/>
        
            Merapihkan database anggota KNP
            Merapihkan database sosok yang telah di eksekusi
            Membuatdatabase untuk setiap sosok yang di laporkan anggota ke grup.
            Membuat konsep konten dari setiap sosok yang akan di posting untuk didiskusikan dengan admin media.
        </li>
        <li><b>Admin Media</b><br/>
        
            Mengaktifkan semua perangkat media KNP: Instagram, Facebook, Twitter, Youtube dan email.
            Membuat rencana konten yang akan ditampilkan : sosok mulia, sosok inspiratif, open donasi, instalive, quote sosial.
            Menetukan jadwal posting.
            Membuat watermark.
            Berkordinasi dengan sekretaris.
        </li>
        <li><b>Eksekutor</b><br/>
        
            Melakukan survey ke lapangan dan mengajak anggota lain untuk ikut serta.
            Berkordinasi dengan bendahara untuk keuangan keperluan survey.
            Melakukan dokumentasi dan di kirimkan ke admin media dan sekretaris untuk database
        </li>

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