<!DOCTYPE html>
<html lang="en">

  <head>
    <base href="/public">
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
                <a class="nav-link" href="/">Home
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="{{ url('viewproducts') }}">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('about') }}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
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

    <div class="container mt-5">
        <div class="row justify-content-center mb-5">
            @foreach ($data as $product)
            <div class="col-md-5" style="margin-top:30px;">
                <img src="/productimage/{{ $product->image }}" alt="" class="img-thumbnail" width="500px">
            </div>
            <div class="col-md-5" style="margin-top:30px;">
                <h2>{{ $product->title }}</h2>
                <p class="mb-3">{{ $product->description }}</p>
                <h1>Rp. {{ $product->price }}</h1>
                <hr>
                <h6>Stock Barang</h6>
                <p>Tersedia > {{ $product->quantity }} stock barang</p>
                <hr>
                <h6>Pengiriman</h6>
                <table style="float:right;">
                  <tr>
                    <td>Lokasi Penjual</td>
                    <td>|</td>
                    <td>Tujuan Pengiriman</td>
                  </tr>
                  <tr align="center">
                    <td><strong>Sidoarjo<br>Jawa Timur</strong></td>
                    <td></td>
                    <td><strong>DKI Jakarta</strong></td>
                  </tr>
                </table>
                <div class="card pr-2 pl-2 mt-3" style="float:right;">
                  <div class="card-body">
                    J&T REG | 3 hari | Rp. 19.000
                  </div>
                </div>
                <form action="{{ url('addshowcart', $product->id) }}" method="post">
                  @csrf
                  <input class="form-control" style="width:60px; float:left; margin-right:15px; margin-top:120px;" type="number" value="1" min="1" name="quantity">
                  <button class="btn btn-success text-dark" type="submit" style="float:left; margin-top:38px;">Beli Sekarang</button>
                </form>
            </div>
            @endforeach
        </div>
        
        <div class="row justify-content-center">
          <div class="col-md-10">
            <hr>
            <h6 class="mb-3">Deskripsi Produk</h6>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error, dolor? Aperiam nulla recusandae numquam eius laborum aliquam consectetur corporis tenetur et nihil nemo ipsa asperiores beatae, tempore quod non animi id dicta voluptatem cum distinctio iste? Earum enim est quos accusantium porro. Inventore, dicta animi totam exercitationem eius minus placeat aspernatur molestiae accusantium non sed. Adipisci ipsum blanditiis, culpa aliquam tempora velit, nemo quia, dolorum iure laborum quos unde ratione ipsam. Quos accusantium qui ab, sint delectus doloremque recusandae architecto repudiandae? Impedit iste dignissimos officiis autem porro nihil labore, totam quia dicta error cupiditate quae, laboriosam sapiente fugiat, unde odit! Dolorum veritatis nam cum officia impedit dolores consectetur, soluta iure dolor magnam id nostrum quidem quas accusantium voluptatibus voluptas repudiandae tempore eligendi ipsam? Dolores quis officiis saepe. Aut nam cupiditate, corrupti praesentium a molestias doloribus magni, quasi debitis obcaecati harum ut quas, veniam eligendi commodi ea suscipit explicabo numquam. Hic beatae sit magni, vel nemo aliquam incidunt, saepe blanditiis est aut reiciendis possimus sequi nesciunt magnam id eveniet consectetur atque! Iusto atque quae maxime eius nostrum nobis laudantium exercitationem nam iure eveniet architecto qui placeat aperiam nulla asperiores, adipisci quibusdam dicta ad, rerum fugit nihil sint. Dolor veniam, in reprehenderit fuga odit doloremque accusantium vitae culpa dignissimos voluptatibus cupiditate incidunt ex deleniti perferendis officia nemo possimus sequi molestias esse distinctio vero laboriosam. Optio similique nostrum maiores sint voluptatibus praesentium, a vel corporis ea eius quidem repudiandae suscipit neque temporibus facere dolor quia deleniti aspernatur eligendi. Illo harum aspernatur, corporis voluptates ab unde modi reiciendis veritatis rerum ad aut doloribus quibusdam, voluptatem dolores quae esse saepe aliquam error iste inventore qui non sapiente. Sequi, vel omnis! Expedita laborum deleniti similique incidunt tempore rem alias obcaecati aperiam, consequatur odit, provident aliquam ex necessitatibus! Vitae, est ipsum. Tempora accusamus veritatis quaerat sint neque cupiditate non itaque ipsa. Omnis accusamus labore, nam harum eveniet cum aperiam beatae dolorum porro quia nisi et reiciendis minus ipsum asperiores debitis soluta pariatur perspiciatis tenetur similique rem. Eius officia sapiente adipisci distinctio consectetur voluptatibus atque sit possimus mollitia neque voluptas dolores aperiam, quo eos earum nisi laboriosam nostrum vitae, eum impedit nemo natus doloribus necessitatibus nulla? Praesentium minima magnam mollitia, ratione rem nesciunt explicabo. Id dolorum laudantium animi cum officiis. Qui recusandae, iste, consequuntur saepe et molestias ullam eaque ipsam quam sunt velit voluptate atque amet nulla maxime pariatur repudiandae architecto, culpa harum provident deserunt autem nostrum? Itaque laboriosam nostrum, ullam ex vel alias voluptatum quaerat, ducimus libero accusantium nesciunt! Quibusdam at quaerat facilis nam praesentium placeat consectetur eos eligendi suscipit veniam iusto ut velit non, omnis totam perspiciatis sit deleniti eveniet quae blanditiis aut. Aut doloremque excepturi voluptas iusto itaque consectetur sit et aperiam suscipit, modi illo necessitatibus minima delectus ipsum minus corporis laboriosam sapiente. Dicta, iste iure, illo aliquam dignissimos voluptate quaerat cum facere suscipit repudiandae ipsa ab incidunt quibusdam beatae pariatur ex quisquam placeat hic. Soluta, distinctio magni officiis accusantium, possimus, repellat ea iusto porro debitis quasi eum molestias eius. Eius, expedita. Veniam, a numquam?</p>
          </div>
        </div>

        <hr>
        <h3 align="center">Produk Disarankan</h3>  
        <div class="row mt-3">      
        @foreach ($products as $product)
          <div class="col-md-4 mb-3">
            <div class="product-item">
              <a href="#"><img src="/productimage/{{ $product->image }}" alt=""></a>
              <div class="down-content">
                <h4><a href="#"><h4>{{ $product->title }}</a></h4>
                <h6>Rp. {{ $product->price }}</h6>
                <p>{{ $product->description }}</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><p>Reviews (24)</li>
                </ul>
                
                <form action="{{ url('addcart', $product->id) }}" method="post">
                  @csrf
                  <input class="form-control" style="width:90px; float:left" type="number" value="1" min="1" name="quantity">
                  <button class="btn btn-success" type="submit"><i class="fas fa-shopping-cart"></i></button>
                  <a href="{{ url('detailproduct', $product->id) }}" class="btn btn-primary text-dark" style="float:right;">Detail</a>
                </form>
              </div>
            </div>
          </div>
        @endforeach
      </div>
        </div>
    </div>
    
    @include('user.footer')

    @include('user.script')

  </body>

</html>
