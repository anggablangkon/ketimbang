

@extends('layouts.layout')

@section('title','Pengumuman Hasil Recrutiment')

@section('css')

@endsection


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
              <!--<p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s"></p>-->
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
              <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">PENGUMUMAN RECRUITMENT</p>       
              <!--<p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s"></p>       -->
              <br/>
              <p>Kami mengucapkan terimaksih kepada teman-teman yang telah mendaftarkan menjadi anggota KNP. Berdasarkan hasil penilaian, kami menetepakan nama-nama berikut yang terpilih menjadi anggota KNP:
              </p>
              <br/>
              <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Berdasarkan Nama" class="form-control" title="Type in a name">
              
              <table id="myTable" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Divisi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach($data as $value)
                    <tr>
                       <td>{{ $no++ }}</td>
                       <td>{{ $value->nama }}</td>
                       <td>{{ $value->devisi }}</td>
                    </tr>
                    @endforeach
               </table>
               
              </center>
              <br/>
              <p> Kami mengucapkan Selamat bagi anggota terpilih menjadi anggota Ketimbang Ngemis Pandeglang. Bagi yang belum terpilih menjadi anggota KNP jangan patah semangat!Selanjutnya, bagi anggota terpilih harus mengikuti Gathering anggota yang akan dilaksanakan akhir bulan April.
              </p>
              
              <br/>
                <b>
                  Share To  :
                  <a href="whatsapp://send?text=https://ketimbangngemispdg.org/pengumuman-recruitment" target="_blank" class="btn-sm btn-success">Whatsapp</a>
                  <a href="https://www.facebook.com/sharer.php?u=https://ketimbangngemispdg.org/pengumuman-recruitment" class="btn-sm btn-primary" target="_blank">Facebook</a>
                  <a href="https://twitter.com/share?url=https://ketimbangngemispdg.org/pengumuman-recruitment" target="_blank" class="btn-sm btn-info">twitter</a>
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

@section('javascript')
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
@endsection