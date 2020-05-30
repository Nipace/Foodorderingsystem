@extends('backend.layouts.app')

@section('content')
    @include('backend.layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">
            
            <div class="col-xl-10 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">{{ __('Edit Role') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('role.update',$role->id) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Role information') }}</h6>
                            
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
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Role Name') }}</label>
                                        <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{$role->name}}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                               
                            </div>
                       
                            <div class="row">
                                <div class="col-md-12 pl-lg-4">
                                <label class="form-control-label" for="input-role">{{ __('Permission') }}</label>
                                    <div class="form-group{{ $errors->has('role') ? ' has-danger' : '' }}">
                                    @foreach($allPermissions as $permissions)
                                        <div class="form-check form-check-inline">
                                            <?php $result="";?>
                                            @foreach($permission as $p)
                                        
                                                @if($p===$permissions)
                                                <?php
                                                $result="checked";
                                                ?>
                                                @endif
                                                @endforeach
                                            <input class="form-check-input" type="checkbox" id="input-permission" name="permission[]" value="{{$permissions}}"{!!$result!!}>
                                            <label class="form-check-label" for="input-permission">{{$permissions}}</label>
                                           
                                        </div>
                                    @endforeach
                                        @if ($errors->has('role'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('role') }}</strong>
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