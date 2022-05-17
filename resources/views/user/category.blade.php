    <!-- Categories section start -->
    <div class="categories mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Kategori Produk</h2>
            </div>
          </div>
        </div>
        <div class="row container" align="center">
        @foreach ($categoryproduct as $c)    
          <div class="col col-md-3 mb-3">
            <div class="card">
              <img src="/assets/images/udang/{{ $c->image }}" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title" style="font-size: 18px;">{{ $c->category_name }}</h5>
                <a href="{{ url('/categories/'.$c->id) }}" class="btn btn-primary">Telusuri</a>
              </div>
            </div>
          </div>
        @endforeach
        </div>
    </div>

