@extends('adminlte::page')

@section('title', 'Thelicham portal | Create user')

@section('content_header')
    <h1>Users <small>Create</small></h1>

    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('users.index')}}"><i class="fa fa-users"></i> Users</a></li>
        <li class="active"><a href="#"> create</a></li>
    </ol>
@stop

@section('content')

    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Add a user</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>'true']) !!}
                <div class="box-body">
                  <div class="form-group">
                    {!! Form::label('name', 'Name', ['class'=>'control-form']) !!}
                    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter user name']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('email', 'Email', ['class'=>'control-form']) !!}
                    {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Enter valid email address']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('role_id', 'Role', ['class'=>'control-form']) !!}
                    {!! Form::select('role_id', array(''=>'Select role', '1'=>'Admin', '2'=>'Client', '3'=>'Subscriber'), null, ['class'=>'form-control']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('is_active', 'Status', ['class'=>'control-form']) !!}
                    {!! Form::select('is_active', array(''=>'Select status', '0'=>'Not Active', '1'=>'Active'), null, ['class'=>'form-control']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('password', 'Password', ['class'=>'control-form']) !!}
                    {!! Form::password('password', ['class'=>'form-control']) !!}
                  </div>
                  <div class="form-group">
                    <label for="photo_id">User image</label>
                    {!! Form::file('photo_id', ['class'=>'form-control-file']) !!}

                    <p class="help-block">User image is optional.</p>
                  </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-user-plus"></i> Add user</button>
                </div>


                {!! Form::close() !!}
            </div>
            <!-- /.box -->

          </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
