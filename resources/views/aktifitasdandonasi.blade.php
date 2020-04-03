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
    <h5 class="h5" style="font-weight: bold; color: black;">Postingan Blogs Member</h5>

    <div class="row">
      <div class="col-sm-4">
       <div class="card bg-light text-dark">
        <div class="card-body">
          <div class="input-group">
            <input type="text" class="" placeholder=" Cari Kata Kunci Blogs" style="width: 60%; border-radius: 2px;">
            <div class="input-group-append">
              <button class="btn btn-primary" style="width: 100%;" type="submit">Cari</button>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="col-sm-8">

      <div class="row">

        @foreach($blogs as $tampil)
        <a href="{{ url('/bacapostingan') }}/{{ $tampil->slug }}">
          <div class="col-lg-4 col-md-6 col-xs-12 blog-item" style="padding-bottom: 10px;">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <img src="{{ asset($tampil->foto) }}" style="height: 150px" alt="">
              </div>
              <div class="blog-item-text"> 
                <a href="{{ url('/lihatdonasi') }}/{{ $tampil->slug }}" style="font-size: 14px;">{{ strtoupper(substr($tampil->judul, 0, 30)) }}..</a>
                @if(strlen($tampil->judul) < 20)
                  <br/><br/>
                @endif
                <div class="author">
                  <span class="name"><a href="#">Posted by : {{ $tampil->cby }}</a></span>
                  <span class="date float-right">{{ $tampil->date }}</span>
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
        @if ($paginate1->lastPage() > 1)
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="{{ $paginate->url(1) }}">Previous</a></li>
          @for ($i = 1; $i <= $paginate1->lastPage(); $i++)
          <li class="page-item"><a class="page-link" href="{{ $paginate->url($i) }}">{{ $i }}</a></li>
          @endfor
          <li class="page-item"><a class="page-link" href="{{ $paginate->url($paginate->currentPage()+1) }}" >Next</a></li>
        </ul>
        @endif
      </div>
    </div>

  </div>

</div>
</div>
</section>
<!-- blog Section End -->


@endsection