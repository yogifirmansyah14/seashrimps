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
            <h1 style="font-weight:bold; font-size:2em;" class="text-center">Add Product</h1>
            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif
            <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mt-3 row">
                    <label for="title" class="col-sm-2 col-form-label">Product Title</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control bg-dark text-light" name="title" id="title" placeholder="Input Product Title">
                    </div>
                </div>
                <div class="mt-3 row">
                    <label for="price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control bg-dark text-light" name="price" id="price" placeholder="Input Product Price">
                    </div>
                </div>
                <div class="mt-3 row">
                    <label for="des" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control bg-dark text-light" name="des" id="des" placeholder="Input Product Description">
                    </div>
                </div>
                <div class="mt-3 row">
                    <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control bg-dark text-light" name="quantity" id="quantity" placeholder="Input Product Quantity">
                    </div>
                </div>
                <div class="mt-3 row">
                    <label for="des" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="category_id">
                            <option selected>Select Category</option>
                            <option value="3">Ikan Laut</option>
                            <option value="4">Ikan Tawar</option>
                            <option value="5">Udang Tawar</option>
                            <option value="6">Udang Laut</option>
                        </select>
                    </div>
                </div>
                <div class="mt-3">
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