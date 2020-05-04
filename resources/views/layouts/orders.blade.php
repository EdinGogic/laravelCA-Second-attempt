

@extends('layouts.admin')

@section('content')
   <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">List of Orders</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('main') }}">Home</a></li>
              <li class="breadcrumb-item active">Management Panel</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

              <table class="table table-dark">
                  <thead>
                  <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Address</th>
                      <th scope="col">Order Date</th>
                      <th scope="col"> Order ID</th>
                  </tr>
                  </thead>
                  @foreach($orders as $order)
                      <tbody>
                      <tr>
                          <th scope="row">{{$order->name}}</th>
                          <td>{{$order->address}}</td>
                          <td>{{$order->created_at}}</td>
                          <td>{{$order->id}}</td>
                      </tr>
   @endforeach

@endsection
