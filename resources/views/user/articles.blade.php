<!DOCTYPE html>
<html lang="en">

  <head>

  @include('user.css')

  </head>

  <body>

    @include('user.header')

    <div class="article mt-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Articles</h2>
              <!-- <a href="{{ url('articles') }}">view all articles <i class="fa fa-angle-right"></i></a> -->
            </div>
          </div>
        </div>
        <div class="row">
          @foreach ($articles as $article) 
          <div class="col-md-4">
            <div class="card mb-3">
              <img src="/articleimage/{{ $article->image }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <p class="card-text">{{ $article->excerpt }}</p>
                <a href="{{ url('viewarticle', $article->slug) }}">Baca Selengkapnya</a>
                <p class="card-text"><small class="text-muted">{{ $article->created_at }}</small></p>
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
