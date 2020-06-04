@extends('backend.layouts.app')

@section('content')
    @include('backend.layouts.headers.cards')

    <div class="container-fluid mt--7">
  
        <div class="row justify-content-center">
            <div class="col-xl-10 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Order Received Today</h3>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
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
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Orderd Item</th>
                                    <th scope="col">Orderd By</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Operations</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order as $orders)   
                                <tr>
                                    <th scope="row">
                                        {{$orders->id}}
                                    </th>
                                    <td>
                                        {{$orders->item_name}}
                                    </td>
                              
                                    <td>
                                        {{$orders->user->name}}
                                    </td>
                                 
                                    <td>
                                        {{$orders->service_type}} 
                                    </td>
                                    <td>
                                        <form action="{{route('order.status',$orders->id)}}" method="POST">
                                            @csrf
                                            <button class="btn btn-sm btn-success" name="action" type="submit" value="accept">Accept</button>
                                            <button class ="btn btn-sm btn-danger"name="action" type="submit" value="reject">Reject</button>
                                            <button class="btn btn-sm btn-primary">Details</button>
                                        </form>
                                      
                                    </td>
                                </tr>
                               
                                @endforeach
                            </tbody>
                        </table>
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