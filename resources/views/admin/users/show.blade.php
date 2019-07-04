@extends('adminlte::page')

@section('title', 'Thelicham Portal | View: '. $user->name)

@section('content_header')
<h1>User <small>View</small></h1>

<ol class="breadcrumb">
    <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{route('users.index')}}"><i class="fa fa-users"></i> Users</a></li>
    <li class="active"><a href="#"> view</a></li>
</ol>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4 col-xs-12">
                <div class="box box-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-aqua-active">
                        <h3 class="widget-user-username"> {{$user->name}} </h3>
                        <h5 class="widget-user-desc"> {{ucfirst($user->role->name)}} </h5>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle" src=" {{$user->photo ? $user->photo->file : 'http://placehold.it/100x100'}} " alt="User Avatar">
                    </div>
                    <div class="box-footer">
                        <div class="row">
                        <div class="col-sm-6">
                            <div class="description-block border-right">
                            <h5 class="description-header">Email</h5>
                            <span class=""> {{$user->email}} </span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <div class="description-block">
                            <h5 class="description-header">Status</h5>
                            <span class=""> {!! $user->is_active == 1 ? '<i class="fa fa-fw fa-circle-o text-green"></i> Active' : '<i class="fa fa-fw fa-circle-o text-red"></i> Not active' !!}</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    </div>
        </div>
        <div class="col-md-8 col-xs-12"></div>
        <div class="clearfix"></div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
