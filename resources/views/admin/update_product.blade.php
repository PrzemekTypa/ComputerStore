<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">

    @include('admin.css')

    <style>
        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }

        .font_size
        {
            font-size: 40px;
            padding-bottom: 40px;
        }

        .text_color
        {
            color: black;
            padding-bottom: 20px;
        }

        label{
            display: inline-block;
            width: 200px;
        }

        .div_design 
        {
            padding-bottom: 15px;
        }

        .current_image
        {
            height: 100px;
            width: 100px;
            margin: auto;
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

            <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    x
                </button>
                {{session()->get('message')}}
            </div>

            @endif

          <div class="div_center">
            <h1 class="font_size">Update Product</h1>

            <form action="{{url('/update_product_confirm', $product->id)}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="div_design">
            <label>Product Title :</label>
            <input type="text" class="text_color" name="title" placeholder="Write a title" required="" value="{{$product->title}}">
            </div>

            <div class="div_design">
            <label>Product Description :</label>
            <input type="text" class="text_color" name="description" placeholder="Write a description" required="" value="{{$product->description}}">
            </div>

            <div class="div_design">
            <label>Product Price :</label>
            <input type="number" class="text_color" name="price" placeholder="Write a price" required="" value="{{$product->price}}">
            </div>

            <div class="div_design">
            <label>Discount Price:</label>
            <input type="number" class="text_color" name="discount_price" placeholder="Write a discount" value="{{$product->discount_price}}">
            </div>

            <div class="div_design">
            <label>Product Quantity :</label>
            <input type="number" class="text_color" min="0" name="quantity" placeholder="Write quantity" required="" value="{{$product->quantity}}">
            </div>

            

            <div class="div_design">
            <label>Product Category  :</label>
            <select class="text_color" name="category" required="">
                <option value="{{$product->category}}" selected="">{{$product->category}}</option>

                @foreach($category as $cat)
                <option value="{{$cat->category_name}}">{{$cat->category_name}}</option>
                @endforeach

            </select>
            </div>

            <div class="div_design">
                <label>Current Product Image :</label>
                <img class="current_image" src="/product/{{$product->image}}">
            </div>

            

            <div class="div_design">
                <label>Change Product Image :</label>
                <input type="file" name="image">
            </div>

            <input type="submit" value="Update Product" class="btn btn-primary">


          </div>

            </form>


        </div>
        </div>
    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>