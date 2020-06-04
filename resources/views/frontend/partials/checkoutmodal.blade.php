<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h2 class="text-center text-uppercase font-weight-bold mb-4">Our Services</h2>
          <h6 class="text-center fo">Please select one</h6>
        <div class="row mb-4">
            <div class="col-md-3">
                
            </div>
            <div class="col-md-6">
                <a href="{{route('checkout.index','pickup')}}"><button class="btn btn-lg btn-danger mr-2">PickUp</button></a>
                <a href="{{route('checkout.index','delivery')}}"><button class="btn btn-lg btn-success">Delivery</button></a>
            </div>
            <div class="col-md-3">
            </div>
        </div> 
      </div>
    
    </div>
  </div>
</div>