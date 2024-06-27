<!-- header section starts -->
<header class="header_section">
   <div class="container">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
           <a class="navbar-brand" href="index.html"><img width="250" src="{{asset('/assets/images/logo.png')}}" alt="#" /></a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class=""> </span>
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav">
                   <li class="nav-item active">
                       <a class="nav-link" href="{{route('indexpage')}}">Home <span class="sr-only">(current)</span></a>
                   </li>
                   <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                       <ul class="dropdown-menu">
                           <li><a href="{{route('aboutpage')}}">About</a></li>
                           <li><a href="{{route('testimonialpage')}}">Testimonial</a></li>
                       </ul>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="{{route('productpage')}}">Products</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="{{route('blogpage')}}">Blog</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="{{route('contactpage')}}">Contact</a>
                   </li>
                  <button class="btn  my-2 my-sm-0 nav_search-btn mr-sm-3" type="submit">
                    {{-- <div class="d-flex">
                        <a href=""><i class="fas fa-shopping-cart" style="color:black;"></i></a>
                        <span 
                            id="cart-counter" style="color: red;">
                            {{Auth::check()? App\Models\Cart::where('user_id',Auth::id())->sum('Quantity'):0}}
                        </span>
                    </div> --}}
                    <div class="d-flex" style="position: relative;">
                        <a href="{{route('cartshow')}}"><i class="fas fa-shopping-cart" style="color:black;"></i></a>
                        <span 
                            id="cart-counter" 
                            style="color: white; background-color: red; border-radius: 50%; padding: 1px 4px; font-size: 10px; position: absolute; top: -5px; right: 0px;">
                            {{ Auth::check() ? App\Models\Cart::where('user_id', Auth::id())->sum('Quantity') : 0 }}
                        </span>
                    </div>
                   </button>
                   @auth
                   <li class="nav-item dropdown"> <!-- Add this list item for user dropdown -->
                       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           {{ Auth::user()->name }} <!-- Assuming 'name' is the field that stores the user's name -->
                       </a>
    
                       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <form method="POST" action="{{ route('logout') }}">
                               @csrf
                               <button type="submit" class="dropdown-item">Logout</button>
                           </form>
                       </div>
                   </li>
                   @else
                   <div> <a href="{{route('login')}}" class="login-button">Login</a></div>
                   <div> <a href="{{ route('register') }}" class="login-button ">Signup</a></div>
                   @endauth
               </ul>
              
           </div>
       </nav>
   </div>
</header>
<!-- end header section -->
