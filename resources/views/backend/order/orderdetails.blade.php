@extends('backend.layouts.app')

@section('content')
    @include('backend.layouts.headers.cards')
    
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-5 order-xl-1 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2 mb-3">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{asset('photos').'/'.$item->image}}" height="200px">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">  
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    <div>
                                        <span class="heading">{{$order->quantity}}</span>
                                        <span class="description">{{ __('Quantity') }}</span>
                                    </div>
                                    <div>
                                        <span class="heading">{{$order->price}}</span>
                                        <span class="description">{{ __('Rate') }}</span>
                                    </div>
                                    <div>
                                    <?php
                                        $total = 0;
                                        $total = $order->quantity * $order->price;
                                    ?>
                                        <span class="heading">{{$total}}</span>
                                        <span class="description">{{ __('Total') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3>
                                {{ $order->item_name }}<span class="font-weight-light"></span>
                            </h3>
                            <div class="h5 font-weight-300 text-success">
                                <i class="ni location_pin mr-2"></i>{{$order->service_type}}
                            </div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>Orderd By: {{$order->user->name}}
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>Delivery Address: {{$order->delivery_address}}
                            </div>
                            <form action="">
                                <button type="submit" class="btn btn-success my-2">Accept</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 order-xl-2">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">Other Orders By {{$order->user->name}}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row pt-2">
                            <div class="col-md-12">
                                @if (session('status'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('status') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                @if (session('error-message'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('error-message') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <h4 class="text-uppercase mb-2">Order Information</h4>
                        <div class="table-responsive">
                        <!-- Projects table -->
                     
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Order Item</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Order Time</th>                                   
                                            <th scope="col">Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($userorders as $orders)   
                                        <tr>
                                            <th scope="row">
                                            {{$orders->item_name}}                                    
                                            </th>
                                            <td>
                                                {{$orders->quantity}}
                                            </td>

                                            <td>
                                                {{$orders->created_at->diffForHumans()}}
                                            </td>
                                        
                                            
                                            <td>
                                                <form action="{{route('order.status',$orders->id)}}" method="POST">
                                                    @csrf
                                                    <button class="btn btn-sm btn-success" name="action" type="submit" value="accept">Accept</button>
                                                    <button class ="btn btn-sm btn-danger"name="action" type="submit" value="reject">Reject</button>
                                                    <a href="{{route('order.details',[$orders->user->id,$orders->id])}}" class="btn btn-sm btn-primary">Details</a> 
                                                </form>
                                            </td>
                                        </tr>
                                    
                                        @endforeach
                                    </tbody>
                                </table>
                           
                        </div> 
                        <form action="{{route('order.changeallstatus')}}" method ="POST"class="my-3">
                            @csrf
                            @foreach($userorders as $o)
                            <input type="hidden" name="orderid[]" id="" value="{{$o->id}}">                           
                            @endforeach
                            <button type="submit" name="action" value="accept"class="btn btn-sm btn-success">Accept All</button>
                            <button type="submit" name="action" value="reject" class="btn btn-sm btn-danger">Reject All</button>
                        </form>
                        <hr>
                        <h4>Total Items : 10</h4>
                        <h4> Total Price : Rs 1200</h4>
                        <h4> Delivery Charge : Rs 8</h4>
                        <hr>
                        <h4>Grand Total: Rs 1208</h4>
                        <form action="" class="my-3">
                            <button type="submit" class="btn btn-sm btn-success">Generate Bill</button>                       
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('backend.layouts.footers.auth')
    </div>
@endsection

