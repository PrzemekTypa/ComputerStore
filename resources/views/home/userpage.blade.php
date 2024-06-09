<!DOCTYPE html>
<html lang="pl">
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Podzespoły.pl-Twój sklep komputerowy</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
         @include('home.slider')
         <!-- end slider section -->
      </div>

      <!-- Sekcja "Dlaczego" -->
      <section id="dlaczego">
         @include('home.why')
      </section>
      
      <!-- Sekcja "Nowości" -->
      <section id="nowosci">
         @include('home.new_arrival')
      </section>
      
      <!-- Sekcja "Produkty" -->
      <section id="produkty">
         @include('home.product')
      </section>

      <!-- Sekcja "Subskrypcja" -->
      <section id="subskrypcja">
         @include('home.subscribe')
      </section>
      
      <!-- Sekcja "Klienci" -->
      <section id="klienci">
         @include('home.client')
      </section>
      
      <!-- stopka -->
      <section id="stopka">
         @include('home.footer')
      </section>
      
      
      <div class="cpy_">
         <p class="mx-auto">© 2024 All Rights Reserved By <a href="{{url('/')}}">Podzespoły.pl</a><br>
         
            Made By Przemysław Typa / Daniel Mosakowski / Paweł Żebrowski
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>