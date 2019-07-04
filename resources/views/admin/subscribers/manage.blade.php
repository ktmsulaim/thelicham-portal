@extends('adminlte::page')

@section('title', 'Thelicham portal | Manage Subscribers')

@section('content_header')
    <h1>Manage subscribers</h1>
@stop

@section('content')
<div class="row">
        <div class="col-lg-6 col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Add new subscriber</h3>
                </div>
                <div class="box-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'AdminSubscribersController@store']) !!}

                  <div class="input-group">
                    <input type="text" name="name" class="form-control" placeholder="Full name">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  </div>
                  <br>

                  <div class="input-group">
                    <input type="text" name="father" class="form-control" placeholder="Name of father">
                    <span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
                 </div>
                 <br>

                 <div class="input-group">
                    <input type="text" name="house" class="form-control" placeholder="House name">
                    <span class="input-group-addon"><i class="fa fa-home"></i></span>
                </div>
                <br>

                 <div class="input-group">
                    <input type="text" name="place" class="form-control" placeholder="Place">
                    <span class="input-group-addon"><i class="fa fa-map-signs"></i></span>
                </div>
                <br>

                 <div class="input-group">
                    <input id="pincode" type="text" name="pincode" class="form-control" placeholder="Pincode">
                    <span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i></span>
                </div>
                <br>

                 <div class="input-group">
                    <input type="text" name="district" class="form-control" placeholder="District">
                    <span class="input-group-addon">D</span>
                </div>
                <br>

                 <div class="input-group">
                    <input type="text" name="post" class="form-control" placeholder="Post">
                    <span class="input-group-addon">P</span>
                </div>
                <br>

                 <div class="input-group">
                    <input type="text" name="rms" class="form-control" placeholder="RMS">
                    <span class="input-group-addon">R</span>
                </div>
                <br>

                 <div class="input-group">
                    <input id="phone" type="text" name="phone" class="form-control" placeholder="Phone number">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                </div>
                <br>

                <div class="form-group">
                    <select name="duration" id="duration" class="form-control">
                        <option value="">Choose duration</option>
                        <option value="1">1 Month</option>
                        <option value="2">2 Months</option>
                        <option value="3">3 Months</option>
                        <option value="4">4 Months</option>
                        <option value="5">5 Months</option>
                        <option value="6">6 Months</option>
                        <option value="12">12 Months</option>
                        <option value="24">24 Months</option>
                    </select>
                </div>
                <br>
                    <div class="form-group">
                        <button class="btn btn-primary"><i class="fa fa-plus"></i> Add subscriber</button>
                    </div>
                  {!! Form::close() !!}
                </div>
                <!-- /.box-body -->
              </div>
        </div>

        <div class="col-lg-6 col-xs-12">
                <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Recent subscriptions</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                          <table class="table table-striped">
                            <tbody><tr>
                              <th style="width: 10px">#</th>
                              <th>Name</th>
                              <th>Duration</th>
                              <th style="width: 40px">%</th>
                            </tr>
                            <tr>
                              <td>1.</td>
                              <td>Person 1</td>
                              <td>
                                <div class="progress progress-xs">
                                  <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-red">55%</span></td>
                            </tr>
                            <tr>
                              <td>2.</td>
                              <td>Person 2</td>
                              <td>
                                <div class="progress progress-xs">
                                  <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">70%</span></td>
                            </tr>
                            <tr>
                              <td>3.</td>
                              <td>Person 3</td>
                              <td>
                                <div class="progress progress-xs progress-striped active">
                                  <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-light-blue">30%</span></td>
                            </tr>
                            <tr>
                              <td>4.</td>
                              <td>Person 4</td>
                              <td>
                                <div class="progress progress-xs progress-striped active">
                                  <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-green">90%</span></td>
                            </tr>
                          </tbody></table>
                        </div>
                        <!-- /.box-body -->
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
        $("#phone").inputmask('(+99) 9999 9999 99');
    });
</script>

@stop
