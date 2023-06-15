<h1>Compare Products</h1>

<form method="POST" action="/products/compare">
    @csrf

    <div>
        <label for="product1">Product 1:</label>
        <select name="product1" id="product1">
            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="product2">Product 2:</label>
        <select name="product2" id="product2">
            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit">Compare</button>
</form>
