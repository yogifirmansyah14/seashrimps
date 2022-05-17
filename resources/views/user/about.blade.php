<!DOCTYPE html>
<html lang="en">

  <head>

    @include('user.css')

  </head>

  <body>

      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Beranda
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="{{ url('viewproducts') }}">Produk Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('about') }}">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('contact') }}">Kontak Kami</a>
              </li>
              <li class="nav-item">
              @if (Route::has('login'))
                        @auth
                          <li class="nav-item">
                            <a class="nav-link" href="{{ url('showcart') }}"><i class="fas fa-shopping-cart"></i>[{{ $count }}]</a>
                          </li>
                            <x-app-layout>

                            </x-app-layout>
                        @else
                            <li><a href="{{ route('login') }}" class="nav-link">Masuk</a></li>

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}" class="nav-link">Daftar</a></li>
                            @endif
                        @endauth
                    </div>
                @endif
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Tentang Kami</h4>
              <h2>Perusahaan Kami</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latar Belakang Kami</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Siapa kita &amp; Apa yang kita lakukan?</h4>
              <p>SeaShrimps adalah platform Marketplace bagi Anda untuk membeli segala jenis Udang dan Ikan. Kualitas dan kuantitas adalah prioritas.<br><br> Berikut adalah panduan untuk menggunakan situs web kami.<br><br> PDF FILE<br><br><br></p>
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Anggota Tim Kami</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/sabina.jpg" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Sitti Aulia Sabina R</h4>
                <span>CO-Founder</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/diana.jpg" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Diana Novita Sari</h4>
                <span>Chief Marketing</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/yogi.jpg" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Moch Yogi Firmansyah</h4>
                <span>Chief Technology</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-gear"></i>
              </div>
              <div class="down-content">
                <h4>Manajemen Produk</h4>
                <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.</p>
                <a href="#" class="filled-button">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-gear"></i>
              </div>
              <div class="down-content">
                <h4>Hubungan Pelanggan</h4>
                <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.</p>
                <a href="#" class="filled-button">Details</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-gear"></i>
              </div>
              <div class="down-content">
                <h4>Koleksi Global</h4>
                <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.</p>
                <a href="#" class="filled-button">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Mitra Yang Bahagia</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel">
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="1">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="2">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="3">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="4">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="5">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="6">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    @include('user.footer')

    @include('user.script')

  </body>

</html>
