<div class="modal right fade " id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-full-height modal-right" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <img class="card-img-top" src="https://media.istockphoto.com/photos/homemade-asian-vegeterian-potstickers-picture-id454269923" alt="Card image cap">
          <button class="close br-danger" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
                <h5 class="font-weight-bold">Fried Momo</h5>
            </div>
            <div class="col-md-6">
              <h5 class="font-weight-bold text-right">$2</h5>
            </div>
          </div>
          <div class="row">
            <p class="pl-3 mt-2">Tomato Sauce Base, Herbs, Cheese, Ham, Pepperoni, Jalapeños, Drizzle of Chilli Sauce</p>
          </div>
        </div>
        <div class="modal-footer">
         <form action="{{route('cart.store')}}" method="post">
           @csrf
           <button class="btn btn-success"> Add </button>
         </form>
        </div>
      </div>
    </div>
  </div>