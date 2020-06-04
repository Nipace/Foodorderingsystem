@extends('backend.layouts.app')

@section('content')
    @include('backend.layouts.headers.cards')
    @include('backend.menu.itemcategory.categorymodal')
    <div class="container-fluid mt--7">
   
        <div class="row justify-content-center">
            <div class="col-xl-10 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Food Items's Category</h3>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#categoryModal">Add Category</a>
                            </div>
                        </div>
                    </div>
                    
                    @if (session('status'))
                    <div class="row">
                        <div class="col-md-6 ml-2">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>  
                        </div>
                    </div>
                    @endif      
                           
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">S.N</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Nav Item</th>
                                    <th scope="col">Operations</th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;?>
                            @foreach($category as $categoryitem)
                                <tr>
                                    <th scope="row">
                                       
                                        {{$i++}}
                                    </th>
                                    <td>
                                        {{$categoryitem->category_name}}
                                    </td>
                                    @if($categoryitem->is_navitem == "0")
                                    <td>
                                       No
                                    </td>
                                    @else
                                    <td>Yes</td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$category->links()}}
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