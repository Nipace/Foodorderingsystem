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
                                <h3 class="mb-0">Our Food Items</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{route('createmenu.create')}}" class="btn btn-sm btn-warning">Add Item</a>
                                <a href="{{route('itemcategory.create')}}" class="btn btn-sm btn-primary">Add Category</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Item Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Operations</th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach($item as $items)
                            
                                <tr>
                                    <th scope="row">
                                        <img src="{{asset('photos').'/'.$items->image}}" alt="" class="item-image rounded-circle">
                                    </th>
                                    <td>
                                        {{$items->item_name}}
                                    </td>
                                    <td>
                                        {{$items->item_price}}
                                    </td>
                                    <td>
                                    <a href="{{route('createmenu.show',$items->id)}}"><button class="btn-sm btn-outline-warning"><i class="far fa-eye"></i></button></a>
                                      <a href="{{route('createmenu.edit',$items->id)}}"><button class="btn-sm btn-outline-info"><i class="far fa-edit"></i></button></a>
                                      <button class="btn-sm btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                        </table>
                        {{$item->links()}}
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