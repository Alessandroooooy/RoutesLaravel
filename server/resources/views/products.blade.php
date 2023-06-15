<!DOCTYPE html>
<html>
<head>
    <title>Products list</title>
</head>
<body>
    <h1>Products list</h1>
    <ul>
        @forelse ($products as $product)
            <li>{{ $product->name }} - {{ $product->price }} EUR.</li>
        @empty
            <li>No products available</li>
        @endforelse
    </ul>
</body>
</html>