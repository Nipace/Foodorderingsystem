<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">   


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>
<body id="main-body">
<div class="container-fluid navb">
  <div class="container ">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand font-weight-bold text-success text-uppercase" href="#">Order<span class="text-dark"> System</span> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mr-4 ">
            <li class="nav-item  font-weight-bold active mr-2 ">
              <a class="nav-link text-success" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
           
            <li class="nav-item  font-weight-bold  mr-2 ">
                <a class="nav-link text-success" href="#">About Us</a>
              </li>
              <li class="nav-item  font-weight-bold  mr-2">
                <a class="nav-link text-success" href="#">Contact Us</a>
              </li>
              
          </ul>
          <a class="nav-link text-success" href="{{route('menu.view')}}"> <button class="btn btn-success">Order Online</button>  </a>

        </div>
      </nav>
  </div>
</div>
      <header class="masthead">
        <div class="back">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
              <h1 class="font-weight-light text-light">Welcome to Food Ordering Resturant</h1>
              <p class="lead text-light mb-3">A great place for ordering best food in town</p>
              <a href="{{route('menu.view')}}"><button type="button" class="btn btn-success font-weight-bold order-btn" >Order Online</button></a>
              <button type="button" class="btn btn-light font-weight-bold ml-2 order-btn">Explore More</button>
            </div>
          </div>
        </div>
      </div>
      </header>
     
      <!-- Page Content -->
      <section class="py-5">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-5 pl-5 ml-5 text-right">
                  <hr width="20%" class="mr-0 bg-success line " >
                    <h2 class="font-weight-bold text-uppercase">About Us</h2>
               
                </div>
                <div class="col-md-6 ml-3">
                  <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Repellendus ab nulla dolorum autem nisi officiis blanditiis voluptatem hic,
                     assumenda 
                    aspernatur facere ipsam nemo ratione cumque magnam enim fugiat reprehenderit 
                    expedita.
                  </p>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                      Repellendus ab nulla dolorum autem nisi officiis blanditiis voluptatem hic,
                       assumenda 
                      aspernatur facere ipsam nemo ratione cumque magnam enim fugiat reprehenderit 
                      expedita.
                    </p>
                      <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Repellendus ab nulla dolorum autem nisi officiis blanditiis voluptatem hic,
                         assumenda 
                        aspernatur facere ipsam nemo ratione cumque magnam enim fugiat reprehenderit 
                        expedita.
                      </p>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                          Repellendus ab nulla dolorum autem nisi officiis blanditiis voluptatem hic,
                           assumenda 
                          aspernatur facere ipsam nemo ratione cumque magnam enim fugiat reprehenderit 
                          expedita.
                        </p>         
                </div>
                
            </div>
            
            
        </div>
        <div class="container py-5">
          <div class="text-center">
              <hr width="10%" class=" bg-success line " >
                <h2 class="font-weight-bold text-uppercase">Our Special</h2>
          </div>
        </div>
      	
      </section>
        <section class="about py-5 mt-4 text-light">
            <div class="container card1">
                <div class="row mb-1">
                  <div class="col-md-3">
                    <div class="card card-cascade wider"></div>
                  <!-- Card image -->
                      <div class="view view-cascade overlay">
                        <img class="card-img-top" src="https://media.istockphoto.com/photos/homemade-asian-vegeterian-potstickers-picture-id454269923" alt="Card image cap">
                        <a href="#!">
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                
                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center pb-0 btn-light">
                
                    <!-- Title -->
                    <h4 class="card-title"><strong>Fried Momo</strong></h4>
                    <!-- Subtitle -->
                    <h6 class="blue-text pb-2"><strong>Buff Veg and Beff </strong></h6>
                    <!-- Text -->
                    <p class="card-text pb-2"> Crunchy deep fried momo.  </p>
                
                   
                  </div>
                
                  </div>
                  <div class="col-md-3">
                    <div class="card card-cascade wider"></div>
                  <!-- Card image -->
                      <div class="view view-cascade overlay">
                        <img class="card-img-top" src="https://media.gettyimages.com/photos/dim-sum-dumplings-freshly-steamed-in-a-bamboo-steamer-picture-id480052548?s=2048x2048" alt="Card image cap">
                        <a href="#!">
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                
                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center pb-0 btn-light">
                
                    <!-- Title -->
                    <h4 class="card-title"><strong>Fried Momo</strong></h4>
                    <!-- Subtitle -->
                    <h6 class="blue-text pb-2"><strong>Buff Veg and Beff </strong></h6>
                    <!-- Text -->
                    <p class="card-text pb-2"> Crunchy deep fried momo.  </p>
                
                   
                  </div>
                
                  </div>
                  <div class="col-md-3">
                    <div class="card card-cascade wider"></div>
                  <!-- Card image -->
                      <div class="view view-cascade overlay">
                        <img class="card-img-top" src="https://images.unsplash.com/photo-1536510233921-8e5043fce771?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=771&q=80" alt="Card image cap">
                        <a href="#!">
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                
                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center pb-0 btn-light">
                
                    <!-- Title -->
                    <h4 class="card-title"><strong>Fried Momo</strong></h4>
                    <!-- Subtitle -->
                    <h6 class="blue-text pb-2"><strong>Buff Veg and Beff </strong></h6>
                    <!-- Text -->
                    <p class="card-text pb-2"> Crunchy deep fried momo.  </p>
                
                   
                  </div>
                
                  </div>
                  <div class="col-md-3">
                    <div class="card card-cascade wider"></div>
                  <!-- Card image -->
                      <div class="view view-cascade overlay">
                        <img class="card-img-top" src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="Card image cap">
                        <a href="#!">
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                
                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center pb-0 btn-light">
                
                    <!-- Title -->
                    <h4 class="card-title"><strong>Fried Momo</strong></h4>
                    <!-- Subtitle -->
                    <h6 class="blue-text pb-2"><strong>Buff Veg and Beff </strong></h6>
                    <!-- Text -->
                    <p class="card-text pb-2"> Crunchy deep fried momo.  </p>
                
                   
                  </div>
                
                  </div>
                </div>
              </div>
        </section>
    <section>
      <div class="container py-5">
        <div class="text-center">
          <hr width="10%" class="bg-success line " >
            <h2 class="font-weight-bold text-uppercase">Location</h2>
      </div>
      <div class="row  mt-5">
        <div class="col-md-6 text-center">
          <h4 class=" text-sucess">Address</h4>
          <p>Milan-Chowk, Koteshwor, Kathmandu, Nepal</p>
          <h4 class=" text-sucess">Phone</h4>
          <p>9847852520</p>
          <h4 class=" text-sucess">Email</h4>
          <p>Ordersystem@order.com</p>
        </div>
        <div class="col-md-6 text-right">
          <iframe class="ml-1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.2969751782302!2d85.3361001143854!3d27.73898473070919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19e59b040003%3A0xf36d3226364b0132!2sHimalaya%20Kyouiku%20Nepal%20Consultancy!5e0!3m2!1sen!2snp!4v1588875476970!5m2!1sen!2snp" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
      
    
      </div>
    </section>
    <div class="text-center mt-3">
      <hr width="10%" class=" bg-success line " >
        <h2 class="font-weight-bold text-uppercase">Contact Us</h2>
  </div>
    <section id="footer" class= "bg-success">
      <div class="container">
      <div class="row">
        <div class=" col-md-8 offset-md-2 card1">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form class=" border border-light p-4" action="" method="POST">
                       <div class="row">
                            <div class="col-md-4">
                                <div class="input-group mb-2 mr-sm-2">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="far fa-user"></i></div>
                                  </div>
                                  <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Name">
                                </div>                            
                              </div>
                            <div class="col-md-4">
                               
                                <div class="input-group mb-2 mr-sm-2">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-phone-alt"></i></div>
                                  </div>
                                  <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Phone">
                                </div>                             
                            </div>
                            <div class="col-md-4">
                              
                              <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Email">
                              </div>                             
                            </div>
                       </div>
                        <div class="row mt-4 ml-1">
                            <div class="col-md-12">
                              <textarea class="form-control" name="message" id="" rows="7" placeholder="Message..."></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success  mt-3" type="submit">Send Message</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
      </div>
    </div>
    <div class="container py-5">
      <div class="text-center">
        
        <a href="" class="text-light "><i id="social-fb"class="fab fa-facebook-square social"></i></a>
        <a href="" class="text-light "><i id="social-tw" class="fab fa-twitter-square social"></i></a>
        <a href="" class="text-light " ><i id="social-gp" class="fab fa-instagram social"></i></a>
        <a href="" class="text-light "><i id="social-em" class="fab fa-pinterest-square social"></i></a>
        <hr width="10%" class="bg-light line " >
         <h6>Copyright © Order|Powered by Radius Infosys</h6>
    </div>
    </section>
     
</body>
</html>
