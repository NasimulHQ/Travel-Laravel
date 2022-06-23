@extends('admin.layout.master')
@section('title')
Admin Dashboard
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            View All Hotel Data
        </h1>
        <a class="btn btn-primary" href="{{ url('add-hotel')}}">Create</a>
        <ol class="breadcrumb">
            <li><a href="{{ url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection