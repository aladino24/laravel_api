<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Product</title>
</head>
<body>
    <form action="/product" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name"><br>
        <label for="description">Description</label>
        <input type="text" name="description"><br>
        <label for="price">Price</label>
        <input type="text" name="price"><br>
        <label for="image_url">Image URL</label>
        <input type="text" name="image_url"><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>