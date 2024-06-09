<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style>
        .title_deg
        {
            text-align: center;
            font-size: 40px;
            padding-bottom: 40px;
            font-weight: bold;
        }

        .table_deg
        {
            border: 2px solid white;
            width: 100%;
            margin: auto;
            padding-top: 50px;
            text-align: center;
        }

        .th_deg
        {
            background-color: grey;
        }

        .img_size
        {
            width: 120px;
            height: 80px;
            margin-left: auto;
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
                <h1 class="title_deg">Zamówienia</h1>

                <table class="table_deg">
                    <tr class="th_deg">
                        <th style="padding: 10px;">Imię</th>
                        <th style="padding: 10px;">Email</th>
                        <th style="padding: 10px;">Nr.tel</th>
                        <th style="padding: 10px;">Adres</th>
                        <th style="padding: 10px;">Tytuł</th>
                        <th style="padding: 10px;">Ilość</th>
                        <th style="padding: 10px;">Cena</th>
                        <th style="padding: 10px;">Status Płatności</th>
                        <th style="padding: 10px;">Status Zamówienia</th>
                        <th style="padding: 10px;">Zdjęcie</th>
                        <th style="padding: 10px;">Dostarczono</th>
                        <th style="padding: 10px;">Wyślij Email</th>
                        
                    </tr>
                    
                    @foreach($order as $order)

                    <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>
                        <td>
                            <img class="img_size" src="/product/{{$order->image}}">
                        </td>
                        <td>
                            @if($order->delivery_status=='w trakcie realizacji')

                            <a href="{{url('delivered', $order->id)}}" onclick="return confirm('Czy jesteś pewny?')" 
                            class="btn btn-primary">Dostarczono</a>

                            @else
                            <p style="color: green;";>Dostarczono</p>

                            @endif
                        </td>

                        <td>
                            <a href="{{url('send_email' ,$order->id)}}" class="btn btn-info">Wyślij Wiadomość</a>
                        </td>
                        
                    </tr>

                    @endforeach

                </table>
            </div>
        </div>
         
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>