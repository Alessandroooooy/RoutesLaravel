<!DOCTYPE html>
<html>
<head>
    <title>edit produt</title>
</head>
<body>
    <h1>edit product</h1>
    <form method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')
        <button type="submit">Save</button>
    </form>
</body>
</html>