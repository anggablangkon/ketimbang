@extends('layouts.layout')

@section('title','Ketimbang Ngemis Pandeglang')

@section('halamanatas')

@endsection

@section('content')

<!-- Blog Section -->
<section id="blog" class="section">
  <!-- Container Starts -->
  <div class="container">
    <br/>

    <div class="row">

      <div class="col-sm-9">
        <h5 class="h5" style="font-weight: bold; color: black;">Postingan Blogs Member</h5>

        <div class="row">
          <div class="col-sm-8" style="padding-top: 15px; color: black;">
            Cari Aktivitas Baru, 35 aktivitas membutuhkan bantuan
          </div>
          <div class="col-sm-3" >
            <button class="btn btn-primary btn-sm"  data-toggle="collapse" href="#collapseOne" style="color: black;">
              <i class='lni lni-angle-double-down'></i>
              Filter Search
            </button>
          </div>
        </div>

        <hr/>

        <div id="collapseOne" class="collapse"  data-parent="#accordion">
          <form action="" method="">
             
             <div class="row">
               <div class="col-sm-9">
                 <input type="text" class="form-control" style="width: 100%; height: 50%; text-align: left; border-color: blue;" name="">
               </div>
               <div class="col-sm-3">
                 <button class="btn btn-success"> Terapkan</button>
               </div>
             </div>

          </form>
        <hr/>
        </div>

        <div class="row">

          @foreach($donasi as $tampil)
          <a href="{{ url('/lihatdonasi') }}/{{ $tampil->slug }}">
            <div class="col-lg-4 col-md-6 col-xs-12 blog-item" style="padding-bottom: 10px; color: #403636;">
              <!-- Blog Item Starts -->
              <div class="blog-item-wrapper">
                <div class="blog-item-img">
                  @if(strlen($tampil->foto) >= 6)
                  <img src="{{ asset($tampil->foto) }}" style="height: 150px" alt="">
                  @else
                  <img src="{{ asset('/imagepost') }}/{{$tampil->id}}.{{$tampil->foto}}" style="height: 150px" alt="">
                  @endif
                </div>
                <div class="blog-item-text"> 
                  <a href="{{ url('/lihatdonasi') }}/{{ $tampil->slug }}" style="font-size: 14px;">{{ strtoupper(substr($tampil->judul, 0, 30)) }}..</a>
                  @if(strlen($tampil->judul) < 25)
                  <br/><br/>
                  @endif
                  <div class="author">
                    <span class="name"><a style="color: #403636;" href="#">Post by : {{ $tampil->cby }}</a></span>
                    {{-- <span class="date float-right">{{ $tampil->date }}</span> --}}
                  </div>
                  <hr/>
                  <div class="row">
                    <div class="col-sm-6 text-left">Sisa Waktu <br/> 
                      @php 

                      $enddate = $tampil->enddate;
                      $enddate = new DateTime($enddate);

                      $today   = new DateTime();

                      $selisih = $enddate->diff($today);
                      $tgl     = $selisih->d + 1 . ' hari';
                      echo $tgl;

                      @endphp
                    </div>
                    <div class="col-sm-6 text-right">Terkumpul <br/> Rp. 0 </div>
                  </div>
                   <div class="progress">
                    <div class="progress-bar" style="width:70%">Tercapai 70%</div>
                  </div> 
                </div>
              </div>
              <!-- Blog Item Wrapper Ends-->
            </div>
          </a>
          @endforeach

        </div>

        <div class="row">
         <!-- paginate -->
         <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
          @if ($paginate->lastPage() > 1)
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="{{ $paginate->url(1) }}">Previous</a></li>
            @for ($i = 1; $i <= $paginate->lastPage(); $i++)
            <li class="page-item"><a class="page-link" href="{{ $paginate->url($i) }}">{{ $i }}</a></li>
            @endfor
            <li class="page-item"><a class="page-link" href="{{ $paginate->url($paginate->currentPage()+1) }}" >Next</a></li>
          </ul>
          @endif
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <h5 class="h5" style="font-weight: bold; color: black;">Iklan Adsense</h5>

      <div class="card bg-light text-dark">
        <div class="card-body">


        </div>
      </div>
    </div>

  </div>
</div>
</section>
<!-- blog Section End -->


@endsection