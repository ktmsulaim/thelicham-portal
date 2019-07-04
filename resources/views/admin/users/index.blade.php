@extends('adminlte::page')

@section('title', 'Thelicham portal | Users')

@section('content_header')
    <h1>Users <small>Management</small></h1>

    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href=""><i class="fa fa-users"></i> Users</a></li>
    </ol>
@stop

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">

        @if (Session::has('user_created'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Success!</h4>
            {{session('user_created')}}
          </div>
        @endif

        @if (Session::has('user_updated'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Success!</h4>
            {{session('user_updated')}}
          </div>
        @endif

        @if (Session::has('user_deleted'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Success!</h4>
            {{session('user_deleted')}}
          </div>
        @endif


    </div>
</div>

<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Portal Users Management</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if ($users)

                @foreach ($users as $user)

                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role->name}}</td>
                        <td>{!! $user->is_active == 1 ? '<span class="label label-success">Active</span>' : '<span class="label label-danger">Not Active</span>' !!}</td>
                        <td>{{$user->created_at->format('d-m-Y')}}</td>
                        <td><a href=" {{route('users.show', $user->id)}} " title="View"><i class="fa fa-eye"></i></a></td>
                        <td><a href=" {{route('users.edit', $user->id)}} " title="Edit"><i class="fa fa-edit"></i></a></td>
                    </tr>

                @endforeach

                @else
                    <tr>
                        <th colspan="6" class="text-center">No users found</th>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
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
