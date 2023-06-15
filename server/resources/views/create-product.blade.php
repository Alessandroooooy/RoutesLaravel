<!DOCTYPE html>
<html>
<head>
    <title>Create product</title>
</head>
<body>
    <h1>Create new product</h1>
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <button type="submit">Create</button>
    </form>
</body>
</html>