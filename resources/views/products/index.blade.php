<h1>List Products</h1>
<table border="1" cellspacing="0" cellpadding="10">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name}}</td>
            <td>{{ $product->description}}</td>
            <td>Rp. {{ $product->price}}</td>
            <td>
                <a href="/products/{{ $product->id }}/edit">Edit</a> |
                <form action="/products/{{ $product->id }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    <a href="/products/create">Create</a>
</table>