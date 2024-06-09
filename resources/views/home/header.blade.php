<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="{{url('/')}}"><img width="250" src="images/logo.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{url('/')}}" style="white-space: nowrap;">Strona główna<span class="sr-only">(current)</span></a>
                        </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Podstrony <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="{{url('about')}}">O nas</a></li>
                              <li><a href="#klienci">Opinie</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#produkty">Produkty</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#stopka">Kontakt</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('show_cart')}}">Koszyk</a>
                        </li>
                        

                        @if (Route::has('login'))

                        @auth

                        <li class="nav-item" id="logout">
                           <form method="POST" action="{{ route('logout') }}">
                              @csrf
                              <input type="submit" value="Wyloguj">
                        </li>

                        @else

                        <li class="nav-item">
                           <a class="btn btn-primary" id="logincss" href="{{ route('login') }}" style="white-space: nowrap;">Zaloguj się</a>
                        </li>
                        <li class="nav-item">
                           <a class="btn btn-success" href="{{ route('register') }}" style="white-space: nowrap;">Załóż konto</a>
                        </li>
                        @endauth

                        @endif
                        
                        
                     </ul>
                  </div>
               </nav>
            </div>
         </header>