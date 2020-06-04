@include('frontend.partials.loginmodal')
<section id="statusbar" class="bg-dark">
        <div class="container">
        <div class="row py-1">
            <div class="col-md-6">
            <span class=" text-light">Phone</span>
        </div>
        
        <div class="col-md-6 text-right">
        @auth
        <form action="{{route('logout')}}" method="POST">
        @csrf
            <span class=" text-light"><i class="far fa-user"></i> {{Auth::user()->name}}</span>
           <button type="submit" class="btn btn-link login-btn"><span class=" text-light pl-5"><i class="fas fa-sign-out-alt"></i> Logout</span></button> 
        </form>
        @endauth
        @guest
      
      
            <span class=" text-light"><i class="far fa-user"></i> Guest</span>
           <a href="{{route('login')}}" class="login-btn"><span class=" text-light pl-5"><i class="fas fa-user-lock"></i> Login/SignUp</span></a> 
        
        @endguest

        </div>
    </div>
</section>
  <div class="container-fluid navb">
   <div class="container ">
    <nav class="navbar navbar-expand-lg navbar-light navbar-static ">
        <a class="navbar-brand font-weight-bold text-success text-uppercase" href="{{route('main')}}">Order<span class="text-dark"> System</span> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav ml-auto mr-4 ">
          
            <li class="nav-item  font-weight-bold  mr-2 ">
                <a class="nav-link text-success" href="{{route('menu.view')}}">Menu</a>
              </li>
              @foreach($navCategory as $navitems)
              <li class="nav-item  font-weight-bold  mr-2">
                <a class="nav-link text-success" href="{{route('menu.category.view',$navitems->category_name)}}">{{$navitems->category_name}}</a>
              </li>
              @endforeach
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-success font-weight-bold " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  All
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach($otherCategory as $category)
                  <a class="dropdown-item"  href="{{route('menu.category.view',$category->category_name)}}">{{$category->category_name}}</a>
                @endforeach
                </div>
              </li>
              
          </ul>
          @if(Auth::user())
          <a class="nav-link text-success" href="{{route('cart.view')}}"> 
            <button class="btn btn-success"><i class="fas fa-cart-arrow-down"></i> Cart 
            <span class="badge badge-warning ml-2 "><span>{{Cart::session(auth()->user()->id)->getTotalQuantity()}}</span>
            </span></button>  
          </a>
          @else
          <a class="nav-link text-success"  data-toggle="modal" data-target="#loginModal">
            <button class="btn btn-success"><i class="fas fa-cart-arrow-down"></i> Cart 
            <span class="badge badge-warning ml-2 "><span>0</span>
            </span></button> 
          </a>
          @endif
        </div>
      </nav>
    </div>
  </div>