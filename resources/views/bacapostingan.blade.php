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

      <div class="col-sm-8">
        {{-- <div class="card bg-light text-dark">
          <div class="card-body"> --}}

            <div class="single-team wow fadeInUp" data-wow-delay="0.2s">
              <div class="team-details">
                <div class="team-inner">


                  <h5 class="h5" style="font-weight: bold; color: black;">{{ strtoupper($postingan->judul) }}</h5>
                  <p>Tanggal Post : {{ $postingan->date }}</p>
                  <hr/>
                  @desktop
                  <center>
                    <img @if(strlen($postingan->foto) >= 6) src="{{ asset($postingan->foto) }}" @else src="{{ asset('/imagepost') }}/{{$postingan->id}}.{{$postingan->foto}}" @endif style="width: 100%;">
                  </center>
                  @enddesktop
                  @mobile
                  <img @if(strlen($postingan->foto) >= 6) src="{{ asset($postingan->foto) }}" @else src="{{ asset('/imagepost') }}/{{$postingan->id}}.{{$postingan->foto}}" @endif style="width: 100%; height: 250px;">
                  @endmobile
                  <br/>
                  <div style="text-align:justify; color:black;">
                    {!! $postingan->isi !!}
                  </div>

                </div>
              </div>
            </div>
          </div>


          <div class="col-sm-4">
          
            <div class="single-team wow fadeInUp" data-wow-delay="0.2s">
              <div class="team-details">
                <div class="team-inner">

                  <center>
                    <img src="{{asset('/images/anga.jpg')}}" alt="user" class="rounded-circle" style="width: 85px; height: 85px;">
                  </center> 
                  <br/>
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped ">
                      <tbody>
                        <tr>
                          <th>Penulis </th>
                          <th> {{ $postingan->name }}</th>
                        </tr>
                        <tr>
                          <th>Bergabung </th>
                          <th> {{ $postingan->created_at }}</th>
                        </tr>
                        <tr>
                          <th colspan="2">
                            <center>
                              <a class="btn btn-primary"><i class='lni lni-user'></i> Detail Profile </a>
                            </center>
                          </th>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
            <br/>
            <div class="single-team wow fadeInUp" data-wow-delay="0.2s">
              <div class="team-details">
                <div class="team-inner">
                  <b>Tulisan trending yang dibuat :</b>
                  <hr/>
                  @foreach($listpost as $key => $values)
                  <ul>
                    <li>{{$no++}}. <a href="{{ url('/bacapostingan/') }}/{{ $values->slug }}">{{ substr(strtoupper($values->judul),0,30) }} ..</a></li>
                  </ul>
                  @endforeach
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- blog Section End -->


    @endsection