<x-layout>
    <h1>Edit Product</h1>
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Use PUT for update -->
        <input type="text" name="name" value="{{ $product->name }}">
        <input type="number" name="landed_cost" value="{{ $product->landed_cost }}">
        <input type="number" name="sell_margin" value="{{ $product->sell_margin }}">
        <input type="number" name="selling_price" value="{{ $product->selling_price }}">
        <input type="submit" value="Update Product">
    </form>
</x-layout>