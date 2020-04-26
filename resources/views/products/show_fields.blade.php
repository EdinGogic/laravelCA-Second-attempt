<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $product->name }}</p>
</div>

<!-- Weight Field -->
<div class="form-group">
    {!! Form::label('weight', 'Weight:') !!}
    <p>{{ $product->weight }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('Price', 'Price:') !!}
    <p>{{ $product->Price }}</p>
</div>

<!-- Categoryid Field -->
<div class="form-group">
    {!! Form::label('categoryID', 'Categoryid:') !!}
    <p>{{ $product->categoryID }}</p>
</div>

