@extends('frontend.layouts.app')

@section('title','Checkout')

@section('content')
 <!-- Page Content -->
    <section id="checkout" style="min-height:100vh">
        <div class="container">
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
            <div class="mt-5">
                <h1>Checkout</h1>
                <hr>
            </div>
            <div class="row">
                @if($service=="delivery")
                        <div class="col-md-6">
                            <form action="{{route('checkout.store','delivery')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Delivery Address</label>
                                    <input type="text" name="address" class="form-control" id="formGroupExampleInput" placeholder="Please enter address for delivery">
                                </div>
                                
                                <div class="form-group">
                                    <label for="delivery-time">Delivery Time</label>
                                    <select class="form-control" id="delivery-time" name="time">
                                    <option value="12">12:00-13:00</option>
                                    <option value="13">13:00-14:00</option>
                                    <option value="14">14:00-15:00</option>
                                    <option value="15">15:00-16:00</option>
                                    <option value="16">16:00-17:00</option>
                                    </select>
                                    <h6 class="mt-3"> <span class="text-danger">Note</span>: Delivery time is between 12:00 PM to 17:00 PM</h6>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="payment" id="payment1" value="On Delivery" checked>
                                        <label class="form-check-label" for="payment1">
                                            Cash on Delivery
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="radio" name="payment" id="payment2" value="paid">
                                        <label class="form-check-label" for="payment2">
                                            Online Payment
                                        </label>
                                    </div>
                                </div>
                                <button type="sumbit" class="btn btn-success mr-2">Order</button>
                                <button type="button" class="btn btn-danger">Go Back</button>
                            </form>
                        </div>
                    @else
                        <div class="col-md-6">
                            <form action="{{route('checkout.store','pickup')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">PickUp Time</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="time">
                                    <option value="12">12:00-13:00</option>
                                    <option value="13">13:00-14:00</option>
                                    <option value="14">14:00-15:00</option>
                                    <option value="15">15:00-16:00</option>
                                    <option value="16">16:00-17:00</option>
                                    </select>
                                    <h6 class="mt-3"> <span class="text-danger">Note</span>: PickUp time is between 12:00 PM to 17:00 PM</h6>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="payment" id="payment1" value="On Delivery" checked>
                                        <label class="form-check-label" for="payment1">
                                            Cash on PickUp
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="radio" name="payment" id="payment2" value="paid">
                                        <label class="form-check-label" for="payment2">
                                            Online Payment
                                        </label>
                                    </div>
                                </div>
                                <button type="sumbit" class="btn btn-success mr-2">Order</button>
                                <a href="{{route('cart.view')}}"><button type="button" class="btn btn-danger">Go Back</button></a>
                            </form>
                        </div>
                @endif
                <div class="col-md-6">
                    <div class="row pt-3">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-6 ">
                                <div class="card border-secondary" style="width: 18rem;">
                                    <ul class="list-group list-group-flush">
                                    @foreach(Cart::session(auth()->user()->id)->getContent() as $items)
                                        <li class="list-group-item font-weight-bold">- {{$items->name}} ({{$items->quantity}})</li>
                                    @endforeach
                                    </ul>
                                    <div class="row mt-3">
                                        <div class="col-md-10 offset-md-2 mb-5">
                                        <span class="font-weight-bold"> Total: Rs {{Cart::session(auth()->user()->id)->getTotal()}} </span> <br>
                                        <span class="font-weight-bold"> Delivery Charge: Rs {{8}} </span><hr width="55px" class="ml-0 bg-success">
                                        <?php
                                        $grand="";
                                            $grand=Cart::session(auth()->user()->id)->getTotal() + 8;
                                        ?>
                                        <span class="font-weight-bold pb-5"> Grand Total: Rs {{$grand}} </span><br>
                                        
                                        </div>
                                    </div>
                                </div>
                                    
                            </div>
                            <hr>
                    
                    </div>
                </div>
            </div>              
        </div>
    </section>
@endsection