<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing HTML Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body style="background-color:#eaeaea; padding-bottom:20px;">

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
              <li class="nav-item active">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="/">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/">Contact Us</a>
              </li>
              <li class="nav-item">
              @if (Route::has('login'))
                        @auth
                          <li class="nav-item">
                            <a class="nav-link" href="{{ url('showcart') }}">Cart[{{ $count }}]</a>
                          </li>
                            <x-app-layout>

                            </x-app-layout>
                        @else
                            <li><a href="{{ route('login') }}" class="nav-link">Log in</a></li>

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}" class="nav-link">Register</a></li>
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
    <form action="{{ url('orders') }}" method="POST">
      @csrf
        <div class="row" style="padding:98px 0 0px;" align="center">
                <table class="table col-8 md" align="center">
                    <tr style="background-color:black; color:white;">
                        <th style="padding:10px 30px;">Product Name</th>
                        <th style="padding:10px 30px;">Quantity</th>
                        <th style="padding:10px 30px;">Price</th>
                        <th style="padding:10px 30px;">Delete</th>
                    </tr>
                    @foreach ($cart as $c)
                    <tr style="background-color:#fff;">
                        <td style="padding-left:10px">
                          <input type="hidden" name="productname[]" value="{{ $c->product_title }}">
                          {{ $c->product_title }}
                        </td>
                        <td style="padding-left:55px">
                          <input type="hidden" name="quantity[]" value="{{ $c->quantity }}">
                          {{ $c->quantity }}
                        </td>
                        <td style="padding-left:25px">
                          <input type="hidden" name="price[]" value="{{ $c->price }}">
                          Rp. {{ $c->price }}
                        </td>
                        <td style="padding-left:25px">
                            <a href="{{ url('delete', $c->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
        </div>
        <div class="row justify-content-center">
          <button class="btn btn-success">Checkout</button>
        </div>   
    </form>

        @include('user.script')


  </body>

</html>
