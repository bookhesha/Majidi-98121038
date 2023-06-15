<h1>Create Product</h1>

<form method="POST" action="/products">
    @csrf

    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </div>

    <div>
        <label for="price">Price:</label>
        <input type="text" name="price" id="price">
    </div>
    <div>
        <label for="description">description:</label>
        <input type="text" name="description" id="description">
    </div>
    <button type="submit">Create</button>
</form>
