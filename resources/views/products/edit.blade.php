<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="/product/{{ $product->id }}" method="POST">
        @method('PUT')
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $product->name }}"><br>
        <label for="description">Description</label>
        <input type="text" name="description" value="{{ $product->description }}"><br>
        <label for="price">Price</label>
        <input type="text" name="price" value="{{ $product->price }}"><br>
        <label for="image_url">Image URL</label>
        <input type="text" name="image_url" value="{{ $product->image_url }}"><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>