
@extends('layouts.menu')
@section('content')
    <H2>Place Order</h2>
    {{ Form::open(array('url' => 'scorders/placeorder', 'method' => 'post')) }}
    @csrf <table class="table table-condensed table-bordered">
        <thead>
        <tr><th>Id</th><th>Name</th><th>Description</th><th>Colour</th><th>Price</th><th>Quantity</th>
        </tr>
        </thead>
        <tbody>
        @php $ttlCost=0; $ttlQty=0;@endphp
        @foreach ($lineitems as $lineitem)
            @php $product=$lineitem['product']; @endphp
            <tr>
                <td><input size="3" style="border:none" type="text" name="productid[]" readonly value="{{ $product->id }}"></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->colour }}</td>

                <td><div class="price">{{ $product->price }}</div></td>
                <td> <input size="3" style="border:none" class="qty" type="text" name="quantity[]" readonly value="<?php echo $lineitem['qty'] ?>"> </td>



                    <br>
                    <br>
                    <br>
                    <br>
                </td>
            </tr>


                @php $ttlQty = $ttlQty + $lineitem['qty']; $ttlCost = $ttlCost + ($product->price*$lineitem['qty']);
                @endphp
            </tr>
        @endforeach

        </tbody>
    </table>

    <form method = "post">
        <input type ="text" id="name" class="form-control" name = "name" placeholder="Enter Your Name">
        <input type ="text" id="address" class="form-control" name ="address" placeholder="Enter Your Address">

    <button type="submit" class="btn btn-primary">Submit</button> {{ Form::close() }}
@endsection
