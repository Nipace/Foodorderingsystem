@extends('backend.layouts.app')

@section('content')
    @include('backend.layouts.headers.cards')
    
    <div class="container-fluid mt--7">
   
        <div class="row justify-content-center">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Our Menu</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{route('menu.item')}}" class="btn btn-sm btn-warning">Edit Menu</a>
                                <a href="#!" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row mb-1">
                            @foreach($item as $items)
                            <div class="col-md-3">
                                <div class="card card-cascade wider"></div>
                                    <!-- Card image -->
                                    <div class="view view-cascade overlay">
                                        <img class="card-img-top" src="{{asset('photos').'/'.$items->image}}" alt="Card image cap">
                                        <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!-- Card content -->
                                    <div class="card-body card-body-cascade text-center pb-0 btn-secondary">
                                    <!-- Title -->
                                        <h4 class="card-title"><strong>{{$items->item_name}}</strong></h4>
                                        <!-- Subtitle -->
                                        <h6><strong>{{$items->description}}</strong></h6>
                                        <!-- Price -->
                                        <h6 class="pb-2">Rs {{$items->item_price}}</h6>
                                    </div>
                                </div>
                            @endforeach   
                        </div>
                    </div>
            </div>
        </div>
        @include('backend.layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush