@extends('backend.layouts.app', ['title' => __('User Profile')])

@section('content')
@include('backend.layouts.headers.cards')
  

    <div class="container-fluid mt--7 ">
        <div class="row justify-content-center">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0 mt-5">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{ asset('photos'.'/'.$item->image) }}" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body pt-0 pt-md-4 mt-5">
                            <h4 class="text-danger text-center mt-4">Available</h4>
                        <div class="text-center mt-md-4">
                            <h3>
                                {{ $item->item_name }} <br>
                            </h3>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>{{$item->category}}
                            </div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>{{$item->description}}
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>Rs {{$item->item_price}}
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
        
        @include('backend.layouts.footers.auth')
    </div>
@endsection