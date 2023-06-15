<h1>Product List</h1>
<ul>
    @foreach ($products as $product)
        <li>{{ $product->name }} - ${{ $product->price }} -{{$product->description}}</li>
    @endforeach
</ul>
