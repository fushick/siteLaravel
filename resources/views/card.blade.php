<div class="col-sm-6 col-md-4" >
<div class="thumbnail">
    <div class="caption">
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->price }} руб.</p>
        <p>
            <form action="{{route('basketAdd', $product->id)}}" method="post">
            <button type="submit" class="btn btn-primary"
               role="button">В корзину</button>
            @csrf
            </form>
        </p>
    </div>
</div>
</div>
