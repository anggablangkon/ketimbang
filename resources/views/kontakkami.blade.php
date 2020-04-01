

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
            <div class="col-lg-12">
              @desktop
              <center>
              <!--<img src="{{ asset('images/knp.PNG') }}" style="width: 300px; height: 300px;">-->
              </center>
              @enddesktop
              @mobile
              <!--<img src="{{ asset('images/knp.PNG') }}" style="width: 100%; height: 400px;">-->
              @endmobile
              <center>
              <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">KONTAK KAMI</p>       
              <!--<p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s"></p>       -->
              </center>
              <br/>
            
             @desktop
              <div class="row">

                              
              <div class="col-sm-6">
              <!-- tag location -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507292.88063602557!2d105.39344614897118!3d-6.618868050204022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e43b65e5200aae7%3A0x301e8f1fc28b8c0!2sKabupaten+Pandeglang%2C+Banten!5e0!3m2!1sid!2sid!4v1553956293592!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
              </iframe>
              </div>

               <div class="col-sm-5">
                        <div class="team-details">
                          <div class="team-inner">
                            <h4 class="team-title">
                            
                            <div style="text-align:left">
                                <h6>Kontak Kami</h6>
                                <table>
                                    <tr>
                                        <td><h6>Telp</h6></td>
                                        <td><h6> : +62 838-0635-4663</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>WA</h6></td>
                                        <td><h6> : +62 838-0635-4663</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>FB</h6></td>
                                        <td><h6> : Ketimbang Ngemis Pandeglang</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>Email</h6></td>
                                        <td><h6> : Knpandeglang90@gmail.com</h6></td>
                                    </tr>
                                </table>
                            </div>
                            
                            </h4>
                          </div>
                      </div>
              </div>
              
              </div>
              <!-- end row -->
             @enddesktop
             
             @mobile
                         <div class="team-details">
                          <div class="team-inner">
                            <h4 class="team-title">
                            
                            <div style="text-align:left">
                                <h6>Kontak Kami</h6>
                                <table>
                                    <tr>
                                        <td><h6>Telp</h6></td>
                                        <td><h6> : +62 838-0635-4663</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>WA</h6></td>
                                        <td><h6> : +62 838-0635-4663</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>FB</h6></td>
                                        <td><h6> : Ketimbang Ngemis Pandeglang</h6></td>
                                    </tr>
                                    <tr>
                                        <td><h6>Email</h6></td>
                                        <td><h6> : Knpandeglang90@gmail.com</h6></td>
                                    </tr>
                                </table>
                            </div>
                            
                            </h4>
                          </div>
                      </div>
                      
                      <!-- tag location -->
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507292.88063602557!2d105.39344614897118!3d-6.618868050204022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e43b65e5200aae7%3A0x301e8f1fc28b8c0!2sKabupaten+Pandeglang%2C+Banten!5e0!3m2!1sid!2sid!4v1553956293592!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
                      </iframe>
              @endmobile
              
                  
                  
            </div>
            <!-- end content -->

        </div>
      </div>
    </section>
    <!-- Awesome Screens Section End -->


@endsection