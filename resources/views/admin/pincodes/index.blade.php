@extends('adminlte::page')

@section('title', 'Thelicham Portal | Pincodes')

@section('content_header')
<h1>Pincodes <small>Management</small></h1>

<ol class="breadcrumb">
    <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><a href=" {{route('pincodes.index')}} "><i class="fa fa-sort-numeric-asc"></i> Pincodes</a></li>
</ol>
@stop

@section('content')
    @if (Session::has('pincode_created'))
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Success!</h4>
                        {{session('pincode_created')}}
                    </div>
            </div>
        </div>

    @endif

    @if (Session::has('pincode_updated'))
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Success!</h4>
                        {{session('pincode_updated')}}
                    </div>
            </div>
        </div>

    @endif

    @if (Session::has('pincode_deleted'))
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Success!</h4>
                        {{session('pincode_deleted')}}
                    </div>
            </div>
        </div>

    @endif

    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">All pincodes</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Office Name</th>
                            <th>Pincode</th>
                            <th>District</th>
                            <th>RMS</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    @if ($pincodes)

                        @foreach ($pincodes as $pincode)


                        <tr>
                            <td>{{$pincode->id}}</td>
                            <td>{{$pincode->office_name}}</td>
                            <td>{{$pincode->pincode}}</td>
                            <td>{{$pincode->district}}</td>
                            <td>{{$pincode->rms}}</td>
                            <td>{{$pincode->created_at->format('d-m-Y')}}</td>
                            <td>{{$pincode->updated_at->format('d-m-Y')}}</td>
                            <td><a href=" {{route('pincodes.edit', $pincode->id)}} "><i class="fa fa-edit"></i></a></td>
                        </tr>

                        @endforeach
                    @else
                        <tr>
                            <td colspan="8" class="text-center">No pincode found</td>
                        </tr>

                    @endif
                  </tbody>
                </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="box-tools">
                        {{$pincodes->render()}}
                    </div>
                </div>
              </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-tags"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Pincodes</span>
                    <span class="info-box-number"> {{$pincodes_count}} </span>
                </div>
                <!-- /.info-box-content -->
            </div>

            @if (count($errors->all()) > 0)

                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Error</h3>
                    </div>
                    <div class="box-body">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            @endif

            <div class="box box-info">
                {!! Form::open(['method'=>'post', 'action'=>'AdminPincodesController@store']) !!}
                <div class="box-header">
                    <h3 class="box-title">Add new pincode</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        {!! Form::text('office_name', null, ['class'=>'form-control', 'placeholder'=>'Office Name']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('pincode', null, ['class'=>'form-control', 'placeholder'=>'Pincode', 'id'=>'pincode']) !!}
                    </div>
                    <div class="form-group">
                            {!! Form::text('district', null, ['class'=>'form-control', 'placeholder'=>'District']) !!}
                    </div>
                    <div class="form-group">
                            {!! Form::text('rms', null, ['class'=>'form-control', 'placeholder'=>'RMS']) !!}
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="/js/jquery.inputmask.bundle.js"></script>
    <script>
        $(function(){
            $("#pincode").inputmask('999999');
        });
    </script>
@stop
