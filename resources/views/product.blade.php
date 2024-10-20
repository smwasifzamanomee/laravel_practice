<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <!-- Add Button -->

    <a href="{{ route('product') }}">Add</a>
    
    <!-- Add Form -->   

    <form action="{{ route('product') }}" method="POST">
        @csrf
        <input type="text" name="name">
        <input type="number" name="landed_cost">
        <input type="number" name="sell_margin">
        <input type="number" name="selling_price">
        <input type="submit" value="Submit">
    </form>
    <!-- table for product  -->
    
    <table>
        <tr>
            <th>Name</th>
            <th>Land Cost</th>
            <th>Sell Margin</th>
            <th>Selling Price</th>
            <th>Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->landed_cost }}</td>
            <td>{{ $product->sell_margin }}</td>
            <td>{{ $product->selling_price }}</td>
            <td>
                <a href="{{ route('product.edit', $product->id) }}">Edit</a>
                <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>