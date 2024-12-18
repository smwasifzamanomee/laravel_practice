<x-layout>


    <div id="app">
        <!-- Add Button -->

        <!-- <a href="{{ route('product') }}">Add</a> -->
        
        <!-- Add Form -->   

        <product-from></product-from>
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
    </div>

<!-- <script src="{{ asset('js/app.js') }}"></script> -->

</x-layout>