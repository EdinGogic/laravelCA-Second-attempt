

@extends('layouts.admin')

@section('content')
   <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">List of active Employees</h1>
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
                  <th scope="col">EmpID</th>
                  <th scope="col">Name</th>
                  <th scope="col">E-mail</th>
                  <th scope="col">Employee Since</th>
              </tr>
              </thead>
              @foreach($users as $user)
              <tbody>
              <tr>
                  <th scope="row">{{$user->id}}</th>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->created_at}}</td>
              </tr>
              @endforeach
<br>

@endsection
