<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    @include('admin.sidebar')
      <!-- partial -->
    @include('admin.navbar')
    <!-- Section Product Start -->
    <div class="container-fluid page-body-wrapper"> 
        <div class="container mt-3">   
            <h1 style="font-weight:bold; font-size:2em;" class="text-center">Add Article</h1>
            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif
            <form action="{{url('uploadarticle')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mt-3 row">
                    <label for="title" class="col-sm-2 col-form-label">Article Title</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control bg-dark text-light" name="title" id="title" placeholder="Input Product Title">
                    </div>
                </div>

                <div class="mt-3 row">
                    <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control bg-dark text-light" name="slug" id="slug" placeholder="Input Product slug">
                    </div>
                </div>

                <div class="mt-3 row">
                    <label for="excerpt" class="col-sm-2 col-form-label">Excerpt</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control bg-dark text-light" name="excerpt" id="excerpt" placeholder="Input Product excerpt">
                    </div>
                </div>

                <div class="mt-3 row">
                    <label for="body" class="col-sm-2 col-form-label">Body</label>
                    <div class="form-floating">
                    <textarea name="body" class="form-control text-light" placeholder="Write article in here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Write Your Article In Here...</label>
                    </div>
                </div>
                
                <div class="mt-3">
                    <label class="col-sm-2 col-form-label">Thumbnail</label>
                    <input class="form-control" type="file" name="file">
                </div>
                <div class="mt-5">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <!-- Section Product End -->
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>