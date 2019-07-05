@extends('adminlte::page')

@section('title', 'Thelicham Portal | Manage pincode change requests')

@section('content_header')
    <h1>Pincode
        <small>Change requests</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="/admin/pincodes">Pincodes</a></li>
        <li class="active"><a href="/admin/manage/pincodes">manage</a></li>
    </ol>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
