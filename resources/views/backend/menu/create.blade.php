@extends('backend.layouts.app')

@section('content')
    @include('backend.layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">
            
            <div class="col-xl-10 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">{{ __('Add Food Item') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('createmenu.store') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Food information') }}</h6>
                            
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-6 pl-lg-4">
                                    <div class="form-group{{ $errors->has('item_name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Item Name') }}</label>
                                        <input type="text" name="item_name" id="input-name" class="form-control form-control-alternative{{ $errors->has('item_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Item Name') }}" value="" required autofocus>

                                        @if ($errors->has('item_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('item_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-category">{{ __('Food Category') }}</label>
                                        <select  name="category" id="input-category" class="form-control form-control-alternative{{ $errors->has('category') ? ' is-invalid' : '' }}" placeholder="{{ __('Food Category') }}" value="" required>
                                            @foreach($category as $itemCategory)
                                                <option>{{$itemCategory->category_name}}</option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('category'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('category') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pl-lg-4">
                                    <div class="form-group{{ $errors->has('item_price') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-price">{{ __('Item Price') }}</label>
                                        <input type="text" name="item_price" id="input-price" class="form-control form-control-alternative{{ $errors->has('item_price') ? ' is-invalid' : '' }}" placeholder="{{ __('Item Price') }}" value="" required autofocus>

                                        @if ($errors->has('item_price'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('item_price') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-phone">{{ __('Image') }}</label>

                                    <div class="custom-file">
                                        <input type="file" name="image" id="input-image" class="custom-file-input form-control form-control-alternative{{ $errors->has('image') ? ' is-invalid' : '' }}" value="" required>
                                        <label class="custom-file-label" for="input-image">Choose file</label>

                                    </div>
                                        @if ($errors->has('image'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 pl-lg-4">
                                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-description">{{ __('Description') }}</label>
                                        <textarea name="description" id="" cols="30" rows="7"class="form-control form-control-alternative{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="{{ __('Item Description') }}"></textarea>
                                        @if ($errors->has('description'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                
                                </div>
                              
                            </div>
                      
                          

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                          
                        </form>
                    </div>
                </div>
            </div>

        </div>
        @include('backend.layouts.footers.auth')
 
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush