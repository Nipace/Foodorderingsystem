@extends('frontend.layouts.app')

@section('title','Menu')

@section('content')

@include('frontend.partials.checkoutmodal')

  
  <!-- Page Content -->
  <section id="cart">
    <div class="container pt-5">
                        <div class="row pt-2">
                            <div class="col-md-6">
                                @if (session('status'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('status') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                            </div>
                        </div> 
      @if(Cart::session(auth()->user()->id)->isEmpty())
      <h3 class="col-md-6 offset-md-2">Your Cart <span class="text-success">({{Cart::session(auth()->user()->id)->getTotalQuantity()}}) </span> </h3> 
      <hr>
      <h5 class="alert alert-danger col-md-6">There is no any item in your cart</h5>
      @else
      <h3 class="col-md-6 offset-md-2">Your Cart <span class="text-success">({{Cart::session(auth()->user()->id)->getTotalQuantity()}}) </span> </h3> 
      <hr>
      @foreach(Cart::session(auth()->user()->id)->getContent() as $items)
        <div class="row pt-5">
          <div class="col-md-3 offset-md-2">
          <img class="card-img-top" src="{{asset('photos').'/'.$items->image}}" 
              style="height:120px; width:120px;"alt="Card image cap">
          </div>
          <div class="col-md-6 ">
              <h5 class="font-weight-bold">{{$items->name}}</h5>
                Rate: Rs {{$items->price}}<br>
                Qty: {{$items->quantity}}<br>
                <?php
                  $price="";
                  $price=$items->quantity*$items->price;
                ?>
                Price: Rs {{$price}}<br>
                <a href="{{route('cart.destroy',$items->id)}}"><button class="btn-sm btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
          </div>
        </div>
        <hr>
     @endforeach
      <div class="row">
        <div class="col-md-4 offset-md-5">
          <span class="font-weight-bold"> Total: Rs {{Cart::session(auth()->user()->id)->getTotal()}} </span> <br>
          <span class="font-weight-bold"> Delivery Charge: Rs {{8}} </span><hr>
          <?php
          $grand="";
            $grand=Cart::session(auth()->user()->id)->getTotal() + 8;
          ?>
          <span class="font-weight-bold"> Grand Total: Rs {{$grand}} </span><br>
          @can('Pickup')
          <button class="btn btn-success mt-4 mb-4" data-toggle="modal" data-target="#checkoutModal"> Checkout </button>
          @else
          <a href="{{route('checkout.index','delivery')}}"><button class="btn btn-success mt-4 mb-4"> Checkout </button></a>

          @endcan
          <button class="btn btn-danger mt-4 mb-4 ml-1"> Add more </button>
        </div>
      </div>
   
    @endif

   
    </div>
  </section>
@endsection