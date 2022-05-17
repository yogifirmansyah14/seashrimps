<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    @include('admin.css')
  </head>
  <body>
    @include('admin.sidebar')
      <!-- partial -->
    @include('admin.navbar')
        <!-- partial -->
    <div class="container-fluid page-body-wrapper"> 
        <div class="container mt-3">   
            <h1 style="font-weight:bold; font-size:2em;" class="text-center">Update Product</h1>
            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif
            <form action="{{url('updateproduct', $data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mt-3 row">
                    <label for="title" class="col-sm-2 col-form-label">Product Title</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control bg-dark text-light" name="title" id="title" value="{{ $data->title }}">
                    </div>
                </div>
                <div class="mt-3 row">
                    <label for="price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control bg-dark text-light" name="price" id="price" value="{{ $data->price }}">
                    </div>
                </div>
                <div class="mt-3 row">
                    <label for="des" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control bg-dark text-light" name="des" id="des" value="{{ $data->description }}">
                    </div>
                </div>
                <div class="mt-3 row">
                    <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control bg-dark text-light" name="quantity" id="quantity" value="{{ $data->quantity }}">
                    </div>
                </div>
                <div class="mt-3">
                    <label class="col-sm-2 col-form-label">Old Image</label>
                    <img src="/productimage/{{ $data->image }}" alt="">
                </div>
                <div class="mt-3">
                    <label class="col-sm-2 col-form-label">Change Image</label>
                    <input class="form-control" type="file" name="file">
                </div>
                <div class="mt-4">
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>