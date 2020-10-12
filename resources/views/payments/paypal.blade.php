<div class="card" style="width: 18rem;">
<img src="{{asset('images/paypal.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Pagar canción</p>
      <form action="{{route('payments.pay')}}" method="POST">
        @csrf
        <input type="hidden" name="value" value="{{$product->price}}">
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <button class="btn btn-primary">Pagar</button>
      </form>
    </div>
</div>