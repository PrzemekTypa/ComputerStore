<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style>

        .center
        {
            margin: auto;
            width: 50%;
            border: 2px solid white;
            text-align: center;
            margin-top: 40px;
        }

        .font_size
        {
            text-align: center;
            font-size: 40px;
            padding-top: 20px;
        }

        .img_size
        {
            width: 100%;
            height: 80px;
            margin-left: auto;
        }

        .th_color
        {
            background: gray;
        }

        .th_deg
        {
          padding: 30px;
          border: 2px solid white;
        }

        .td_border
        {
          border: 2px solid white;
        }
        
    </style>
    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <!-- partial:partials/_navbar.html -->
      @include('admin.header')
      <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          @if(session()->has('message'))

            <div class="alert alert-danger">

                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    x
                </button>
                {{session()->get('message')}}
            </div>

            @endif

          <h2 class="font_size">All Products</h2>

          <table class="center">
            <tr class="th_color">
                <th class="th_deg">Product Title</th>
                <th class="th_deg">Description</th>
                <th class="th_deg">Quantity</th>
                <th class="th_deg">Category</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Discount Price</th>
                <td class="th_deg">Image</th>
                <td class="th_deg">Delete</th>
                <td class="th_deg">Edit</th>
            </tr>

            @foreach($product as $product)

            <tr>
                <td class="td_border">{{$product->title}}</td>
                <td class="td_border">{{$product->description}}</td>
                <td class="td_border">{{$product->quantity}}</td>
                <td class="td_border">{{$product->category}}</td>
                <td class="td_border">{{$product->price}}</td>
                <td class="td_border">{{$product->discount_price}}</td>
                <td class="td_border"><img class="img_size" src="/product/{{$product->image}}"></td>
                <td>
                  <a href="{{url('delete_product', $product->id)}}" 
                  class="btn btn-danger" onclick="return confirm('Czy na pewno chcesz usunąć?')">Delete</a>
                </td>
                <td><a href="{{url('update_product', $product->id)}}" 
                class="btn btn-warning">Edit</a></td>
            </tr>

            @endforeach

          </table>
            
          </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>