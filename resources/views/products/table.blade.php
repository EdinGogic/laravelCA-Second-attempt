<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
        <th>Colour</th>
        <th>Price</th>
        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>

                <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->colour }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->image }}</td>
                <td>
                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('products.edit', [$product->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
