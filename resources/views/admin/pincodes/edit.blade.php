@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Pincode
        <small>Management</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="/admin/pincodes">Pincodes</a></li>
        <li class="active"><a href="/admin/manage/pincodes">Edit</a></li>
    </ol>
@stop

@section('content')

@if (count($errors->all()) > 0)
<div class="row">
    <div class="col-md-8">
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
    </div>
</div>


@endif


<div class="row">
<div class="col-md-8">
    <div class="box">
        {!! Form::model($pincode, ['method'=>'PATCH', 'action'=>['AdminPincodesController@update', $pincode->id]]) !!}
        <div class="box-header">
          <h3 class="box-title">Edit: <span class="text-red">{{$pincode->pincode}}</span></h3>
        </div>
        <!-- /.box-header -->
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
        <!-- /.box-body -->
        <div class="box-footer">
                <button type="submit" class="btn btn-info"><i class="fa fa-send"></i> update</button>
        </div>
        {!! Form::close() !!}
      </div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box bg-red">
        <span class="info-box-icon"><i class="fa fa-trash"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Delete</span>
          <span class="info-box-number"> {{$pincode->pincode}} </span>

          {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPincodesController@destroy', $pincode->id]]) !!}
            <button class="btn btn-sm btn-danger pull-right" type="submit"><i class="fa fa-arrow-right"></i> Proceed</button>
          {!! Form::close() !!}
        </div>
        <!-- /.info-box-content -->
      </div>

    <div class="box box-info">

        <div class="box-header">
            <h3 class="box-title">Recent pincodes</h3>
        </div>
        <div class="box-body no-padding">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Pincode</th>
                        <th>Post Office</th>
                        <th>District</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($recent_pincodes)

                    @foreach ($recent_pincodes as $rp)
                        <tr>
                            <td> {{$i++}} </td>
                            <td>{{$rp->pincode}}</td>
                            <td>{{$rp->office_name}}</td>
                            <td>{{$rp->district}}</td>
                        </tr>
                    @endforeach

                    @else
                    <tr>
                        <td colspan="4" class="text-center">No pincodes</td>
                    </tr>
                    @endif
                </tbody>
            </table>
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
    <script src="/js/jquery.inputmask.bundle.js"></script>
    <script>
        $(function(){
            $("#pincode").inputmask('999999');
        });
    </script>
@stop
