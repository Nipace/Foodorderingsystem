@extends('frontend.layouts.app')

@section('title','Menu')

@section('content')
@include('frontend.partials.addtocartmodal')
@include('frontend.partials.loginmodal')

<header>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('https://images.unsplash.com/photo-1447078806655-40579c2520d6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')">
          <div class="carousel-caption d-none d-md-block">
            <div class="text-center mb-5">
                <hr width="10%" class=" bg-success line " >
                  <h1 class="font-weight-bold text-uppercase">Our Menu</h1>
            </div>
          </div>
        </div>
      </div> 
</header>
  
  <!-- Page Content -->
  <section class="py-5">
    <div class="container">
        <div class=" col-md-12 menucard">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="container">
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
                                  <h6 class="pb-2"><strong>buff veg and beef available</strong></h6>
                                  <!-- Text -->
                                  <hr class="bg-dark">
                                  <div class="row">
                                    <div class="col-md-4 font-weight-bold pt-2">
                                      $200
                                    </div>
                                   
                                    <div class="col-md-4 offset-md-3 mb-3">
                                    @if(Auth::user())
                                      <span data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                      <button type="button"  class="btn btn-outline-success"  
                                      style="width:60px;" data-toggle="modal" data-target="#cartModal"><i class="fas fa-cart-arrow-down"></i></button>
                                    </span>
                                    @else
                                    <span data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                      <button type="button"  class="btn btn-outline-success"  
                                      style="width:60px;" data-toggle="modal" data-target="#loginModal"><i class="fas fa-cart-arrow-down"></i></button>
                                    </span>
                                    @endif

                                  </div>
                                  </div>
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
                            <h6 class="pb-2"><strong>buff veg and beef available</strong></h6>
                            <!-- Text -->
                            <hr class="bg-dark">
                            <div class="row">
                              <div class="col-md-4 font-weight-bold pt-2">
                                $200
                              </div>
                              <div class="col-md-4 offset-md-3 mb-3">
                                <span data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                <button type="button"  class="btn btn-outline-success"  
                                style="width:60px;" data-toggle="modal" data-target="#cartModal"><i class="fas fa-cart-arrow-down"></i></button>
                              </span>
                            </div>
                            </div>
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
                            <h6 class="pb-2"><strong>buff veg and beef available</strong></h6>
                            <!-- Text -->
                            <hr class="bg-dark">
                            <div class="row">
                              <div class="col-md-4 font-weight-bold pt-2">
                                $200
                              </div>
                              <div class="col-md-4 offset-md-3 mb-3">
                                <span data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                <button type="button"  class="btn btn-outline-success"  
                                style="width:60px;" data-toggle="modal" data-target="#cartModal"><i class="fas fa-cart-arrow-down"></i></button>
                              </span>
                            </div>
                            </div>
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
                                  <h6 class="pb-2"><strong>buff veg and beef available</strong></h6>
                                  <!-- Text -->
                                  <hr class="bg-dark">
                                  <div class="row">
                                    <div class="col-md-4 font-weight-bold pt-2">
                                      $200
                                    </div>
                                    <div class="col-md-4 offset-md-3 mb-3">
                                        <span data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                        <button type="button"  class="btn btn-outline-success"  
                                        style="width:60px;" data-toggle="modal" data-target="#cartModal"><i class="fas fa-cart-arrow-down"></i></button>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                        
                          </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                              <div class="card card-cascade wider "></div>
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
                                  <h6 class="pb-2"><strong>buff veg and beef available</strong></h6>
                                  <!-- Text -->
                                  <hr class="bg-dark">
                                  <div class="row">
                                    <div class="col-md-4 font-weight-bold pt-2">
                                      $200
                                    </div>
                                    <div class="col-md-4 offset-md-3 mb-3">
                                      <span data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                      <button type="button"  class="btn btn-outline-success"  
                                      style="width:60px;" data-toggle="modal" data-target="#cartModal"><i class="fas fa-cart-arrow-down"></i></button>
                                    </span>
                                  </div>
                                  </div>
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
                              <h6 class="pb-2"><strong>buff veg and beef available</strong></h6>
                              <!-- Text -->
                              <hr class="bg-dark">
                              <div class="row">
                                <div class="col-md-4 font-weight-bold pt-2">
                                  $200
                                </div>
                                <div class="col-md-4 offset-md-3 mb-3">
                                  <span data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                  <button type="button"  class="btn btn-outline-success"  
                                  style="width:60px;" data-toggle="modal" data-target="#cartModal"><i class="fas fa-cart-arrow-down"></i></button>
                                </span>
                              </div>
                              </div>
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
                              <h6 class="pb-2"><strong>buff veg and beef available</strong></h6>
                              <!-- Text -->
                              <hr class="bg-dark">
                              <div class="row">
                                <div class="col-md-4 font-weight-bold pt-2">
                                  $200
                                </div>
                                <div class="col-md-4 offset-md-3 mb-3">
                                  <span data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                  <button type="button"  class="btn btn-outline-success"  
                                  style="width:60px;" data-toggle="modal" data-target="#cartModal"><i class="fas fa-cart-arrow-down"></i></button>
                                </span>
                              </div>
                              </div>
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
                              <h6 class="pb-2"><strong>buff veg and beef available</strong></h6>
                              <!-- Text -->
                              <hr class="bg-dark">
                              <div class="row">
                                <div class="col-md-4 font-weight-bold pt-2">
                                  $200
                                </div>
                                <div class="col-md-4 offset-md-3 mb-3">
                                  <span data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                  <button type="button"  class="btn btn-outline-success"  
                                  style="width:60px;" data-toggle="modal" data-target="#cartModal"><i class="fas fa-cart-arrow-down"></i></button>
                                </span>
                              </div>
                              </div>
                            </div>
                          
                            </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection