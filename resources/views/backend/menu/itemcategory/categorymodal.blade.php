<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Food Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ route('itemcategory.store') }}" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 pl-lg-4">
                                    <div class="form-group{{ $errors->has('category_name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Category Information') }}</label>
                                        <input type="text" name="category_name" id="input-name" class="form-control form-control-alternative{{ $errors->has('category_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Category Name') }}" value="" required autofocus>

                                        @if ($errors->has('category_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('category_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group{{ $errors->has('is_navitem') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-navitem">{{ __('Select as Nav Item') }}</label>
                                        <select  name="is_navitem" id="input-navitem" class="form-control form-control-alternative{{ $errors->has('is_navitem') ? ' is-invalid' : '' }}" placeholder="{{ __('Food Category') }}" value="" required>
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                            
                                        </select>

                                        @if ($errors->has('is_navitem'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('is_navitem') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                                <div class="ml-2">
                                    <button type="submit" class="btn btn-success mt-1 mb-3">{{ __('Save') }}</button>
                                </div>
                          
                        </form>
      </div>
    </div>
  </div>
</div>