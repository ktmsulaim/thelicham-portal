@extends('adminlte::page')

@section('title', 'Thelicham portal | Dashboard')

@section('content_header')
    <h1>Dashboard
            <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="/admin">Dashboard</a></li>
    </ol>
@stop

@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3> {{$user_count}} </h3>

                  <p>Users</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
                <a href=" {{route('users.index')}} " class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3> {{$user_active_count}} </h3>

                  <p>Active</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href=" {{route('users.index')}} " class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>1144</h3>

                  <p>Subscribers</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>

                  <p>Pending Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>

          <div class="row">
                <section class="col-lg-6 connectedSortable">

                        <!-- TO DO List -->
                        <div class="box box-primary">
                          <div class="box-header">
                            <i class="ion ion-clipboard"></i>

                            <h3 class="box-title">To Do List</h3>

                            <div class="box-tools pull-right">
                              <ul class="pagination pagination-sm inline">
                                <li><a href="#">&laquo;</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">&raquo;</a></li>
                              </ul>
                            </div>
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body">
                            <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                            <ul class="todo-list">
                              <li>
                                <!-- drag handle -->
                                <span class="handle">
                                      <i class="fa fa-ellipsis-v"></i>
                                      <i class="fa fa-ellipsis-v"></i>
                                    </span>
                                <!-- checkbox -->
                                <input type="checkbox" value="">
                                <!-- todo text -->
                                <span class="text">Send new copies to active subscribers</span>
                                <!-- Emphasis label -->
                                <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                                <!-- General tools such as edit or delete-->
                                <div class="tools">
                                  <i class="fa fa-edit"></i>
                                  <i class="fa fa-trash-o"></i>
                                </div>
                              </li>

                            </ul>
                          </div>
                          <!-- /.box-body -->
                          <div class="box-footer clearfix no-border">
                            <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
                          </div>
                        </div>
                        <!-- /.box -->

                    </section>

                    <section class="col-lg-6">
                         <!-- TABLE: LATEST ORDERS -->
                        <div class="box box-info">
                            <div class="box-header with-border">
                            <h3 class="box-title">Latest subscribers</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                            <div class="table-responsive">
                                <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>Subscriber ID</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Duration</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                    <td>Person 1</td>
                                    <td><span class="label label-success">Active</span></td>
                                    <td>
                                    <div class="sparkbar" data-color="#00a65a" data-height="20">6 Months</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                    <td>Person 2</td>
                                    <td><span class="label label-warning">Ending</span></td>
                                    <td>
                                    <div class="sparkbar" data-color="#f39c12" data-height="20">24 Months</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                    <td>Person 3</td>
                                    <td><span class="label label-danger">Over</span></td>
                                    <td>
                                    <div class="sparkbar" data-color="#f56954" data-height="20">12 Months</div>
                                    </td>
                                </tr>

                                </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            </div>
                    </section>
                    <div class="clearfix"></div>
          </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script>

     </script> --}}
@stop
