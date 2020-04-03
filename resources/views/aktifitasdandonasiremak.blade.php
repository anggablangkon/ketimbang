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
                 <div class="section-header">   
                  <h2 class="section-title">Postingan Donasi</h2>
                </div>

                <div class="row">
                  
                @foreach($donasi as $tampil)
                <a href="{{ url('/lihatdonasi') }}/{{ $tampil->slug }}">
                  <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper">
                      <div class="blog-item-img">
                          <img src="{{ asset($tampil->foto) }}" style="height: 200px" alt="">
                      </div>
                      <div class="blog-item-text"> 
                        <h3><a href="{{ url('/lihatdonasi') }}/{{ $tampil->slug }}">{{ substr($tampil->judul, 0, 30) }}</a></h3>
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
              </div>

              <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-6">

                <!-- paginate -->
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


              <!-- Container Starts -->
              <div class="container">
                <br/>
                 <div class="section-header">   
                  <h2 class="section-title">Postingan Blogs</h2>
                </div>

                <div class="row">
                  
                @foreach($blogs as $tampil)
                <a href="{{ url('/bacapostingan') }}/{{ $tampil->slug }}">
                  <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper">
                      <div class="blog-item-img">
                          <img src="{{ asset($tampil->foto) }}" style="height: 200px" alt="">
                      </div>
                      <div class="blog-item-text"> 
                        <h3><a href="{{ url('/lihatdonasi') }}/{{ $tampil->slug }}">{{ substr($tampil->judul, 0, 30) }}..</a></h3>
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
              </div>

              <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-6">

                <!-- paginate -->
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
    </section>
    <!-- blog Section End -->


@endsection