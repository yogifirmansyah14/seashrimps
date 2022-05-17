    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
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
      @if (session()->has('message'))
      <div class="row">
        <div class="col-12 md-4 text-center">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
        @endif
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->