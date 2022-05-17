<!DOCTYPE html>
<html lang="en">

  <head>
    <base href="/public">
  @include('user.css')

  </head>

  <body>

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
    </header>
    <div class="container" style="padding-top:120px;">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h4>{{ $article->title }}</h4>
                <img src="articleimage/{{ $article->image }}" alt="" class="img-fluid mt-2 mb-2" width="800px">
                <p class="card-text mb-3"><small class="text-muted">Artikel diterbitkan pada {{ $article->created_at }}</small></p>
                {!! $article->body !!}
            </div>
        </div>
    </div>
    
    @include('user.footer')

    @include('user.script')

  </body>

</html>
