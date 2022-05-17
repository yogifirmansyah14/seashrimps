<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    @include('admin.sidebar')
      <!-- partial -->
    @include('admin.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper"> 
        <div class="container mt-3">
            @if(session()->has('message'))
                <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
                {{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            @endif
            <table>
                    <tr align="center">
                        <th style="padding:20px;">Title</th>
                        <th style="padding:20px;">Description</th>
                        <th style="padding:20px;">Quantity</th>
                        <th style="padding:20px;">Price</th>
                        <th style="padding:20px;">Image</th>
                        <th style="padding:20px;">Update</th>
                        <th style="padding:20px;">Delete</th>
                    </tr>
                    @foreach ($data as $product)
                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                        <td style="text-align:center;">{{ $product->quantity }}</td>
                        <td style="text-align:center;">{{ $product->price }}</td>
                        <td>
                            <img src="/productimage/{{ $product->image }}">
                        </td>
                        <td>
                            <a href="{{ url('updateview', $product->id) }}" class="btn btn-primary">Update</a>
                        </td> 
                        <td>
                            <a href="{{ url('deleteproduct', $product->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- Bootstrap core JavaScript -->
    @include('admin.script')
  </body>
</html>