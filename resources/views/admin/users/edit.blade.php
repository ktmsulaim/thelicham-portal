@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Users <small>Edit</small></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Edit: {{$user->name}} </h3>
                </div>
                <div class="box-body">
                    {!! Form::model($user,['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}
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
                    {!! Form::select('role_id', array(''=>'Select role', '1'=>'Admin', '2'=>'Author', '3'=>'Subscriber'), null, ['class'=>'form-control']) !!}
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
                  <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Update</button>
                </div>


                {!! Form::close() !!}
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="box box-danger">
                <div class="box-header">
                    <h3 class="box-title">Deactivate account</h3>
                </div>

                <div class="box-body">
                    <p>If you are deleting this user, you can't recover it at all!</p>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#user-delete">
                        <i class="fa fa-trash"></i> Delete user
                    </button>

                    <div class="modal modal-danger fade" id="user-delete" style="display: none;">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                                  <h4 class="modal-title"> {{$user->name}} </h4>
                                </div>
                                <div class="modal-body">
                                  <p>Are you sure to delete this user? You cannot undo once it has been deleted!</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>

                                  {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
                                    <button type="submit" class="btn btn-outline"><i class="fa fa-trash"></i> Delete</button>

                                  {!! Form::close() !!}
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
