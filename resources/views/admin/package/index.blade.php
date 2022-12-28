@extends('admin.layout.master')
@section('title')
Admin Dashboard
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>View All Data</h1>
        <a class="btn btn-success" href="{{ url('add-package')}}">Create</a>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Package Title</th>
                        <th>Package Heading</th>
                        <th>Package Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($package as $view)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $view->package_title }}</td>
                        <td>{{ $view->package_heading }}</td>
                        <td>{{ $view->package_description}}</td>
                        {{-- <td>
                            <a href="{{ url('edit-hotel/'.$show->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{ url('delete-hotel/'.$show->id)}}" class="btn btn-danger">Delete</a>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection