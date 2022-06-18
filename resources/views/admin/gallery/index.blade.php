
@extends('admin.layout.master')
@section('title')
Gallery Dashboard
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>View All Gallery Data</h1>
        <a class="btn btn-success" href="{{ url('add-gallery')}}">Create</a>
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
                        <th>Gallery Title</th>
                        <th>Gallery Header</th>
                        <th>Gallery Image</th>
                        <th>Gallery image Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gallery as $item)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $item->galler_title }}</td>
                            <td>{{ $item->galler_heading }}</td>
                            <td>
                                <img src="{{ asset('uploads/gallerys/'.$item->galler_image)}}" height="80px" width="80px" alt="image">
                            </td>
                            <td>{{ $item->galler_image_title}}</td>
                            <td></td>
                            <td></td>
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