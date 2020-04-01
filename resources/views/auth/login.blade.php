@extends('layouts.layout')

@section('title', 'Masuk Kedalam Sistem')

@section('halamanatas')

    <div class="container">      
        <div class="row space-100">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="contents">
             <center>

                 <div class="row">
                    <div class="col-12 form-line">
                    <h2>Login Kedalam Sistem</h2>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="email" autocomplete="off" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Maaf Email Anda Tidak Terdaftar!</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Maaf! Password Yang Anda Masukan Salah.</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                 <button type="submit" class="btn btn-primary">
                                    {{ __('Masuk') }}
                                </button>
                                <a href="{{ url('/') }}" class="btn btn-danger"> Kembali </a>

                            </div>

                        </div>
                    </form>

                    </div>
                  </div>

             </center>
            </div>
          </div>
        </div> 
    </div>  

@endsection
