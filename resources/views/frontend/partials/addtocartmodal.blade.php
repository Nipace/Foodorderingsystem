<div class="modal right fade " id="cartModal-{{$items->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-full-height modal-right" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <img class="card-img-top" src="{{asset('photos').'/'.$items->image}}" alt="Card image cap">
          <button class="close br-danger" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
                <h5 class="font-weight-bold">{{$items->item_name}}</h5>
            </div>
            <div class="col-md-6">
              <h5 class="font-weight-bold text-right">Rs{{$items->item_price}}</h5>
            </div>
          </div>
          <div class="row">
            <p class="pl-3 mt-2">{{$items->description}}</p>
          </div>
        </div>
        <div class="modal-footer addcartmodal">
       
            <form action="{{route('cart.store')}}" method="post">
            @csrf
              <div class="row">
                <div class="col-md-10">
                  <button type="button" id="sub" class="btn-danger sub">-</button>
                  <input type="number" class="form-control-sm" name="quantity"id="1" value="1" min="1" max="100" />
                  <button type="button" id="add" class="btn-success add">+</button>
                  <input type="hidden" name="id" value="{{$items->id}}">
                  <input type="hidden" name="item_name" value="{{$items->item_name}}">
                  <input type="hidden" name="item_price" value="{{$items->item_price}}">
                  <input type="hidden" name="image" value="{{$items->image}}">
                </div>
                <div class="col-md-2">
                  <button class="btn btn-success"> Add </button>
                </div>
              </div>
              
                
                
            </form>
        </div>
      </div>
    </div>
  </div>