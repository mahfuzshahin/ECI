@extends('admin.layouts.app-template')


{{--  Page Title [ Important ]  --}}
@section('title', 'Welcome to Dashboard')


<!-- Flash Message [ Optional ]  -->
@section('flash-message')
@stop

<!-- Page Content -->
@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <h4>                         
                <a href="" class="btn btn-primary">Back</a>
            </h4>
            @if(session()->has('FlsMsg'))
                <div class="alert  alert-success alert-dismissible"> 
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {!! session('FlsMsg') !!}
                </div>
            @endif
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a aria-expanded="false" data-toggle="tab" href="#pending-list"><i class="fa fa-users" aria-hidden="true"></i> Application List</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="pending-list">
                        <div class="row">
                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="table-responsive">
                                            <table class="table table-bordered table-striped" id="example2">
                                                <thead>
                                                    <tr>
                                                        <th>Researcher's Name</th>
                                                        <th>Faculty Name</th>
                                                        <th>Department</th>
                                                        <th>Email Address</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($phd_apps as $app)
                                                    <tr>
                                                        <td>{{$app->user->name}}</td>
                                                        <td>{{$app->faculty->faculty_name}}</td>
                                                        <td>{{$app->department->department_name}}</td>
                                                        <td>{{$app->user->email}}</td>
                                                        <td><a href="{{ action('AdminController@submitted_phd_application_details', $app->id)}}">Details</a></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            </div>

                                            </div>
                                        </div><!-- /.box-header -->
                                        
                                    </div><!-- /.box -->
                                </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div>
                
                </div><!-- /.tab-content -->
            </div><!-- nav-tabs-custom -->
        </div><!-- left column -->
    </div>

@stop

<!-- Page Modal -->
@section('modals')
@stop

@push('styles')
      <style>
      .small-box > .small-box-footer {
            position: relative;
            text-align: center;
            padding: 15px 0;
            color: #fff;
            color: rgba(255, 255, 255, 0.8);
            display: block;
            z-index: 10;
            background: rgba(0, 0, 0, 0.1);
            text-decoration: none;
        }

        .small-box .icon {
            -webkit-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
            transition: all 0.3s linear;
            position: absolute;
            top: 4px;
            right: 10px;
            z-index: 0;
            font-size: 70px;
            color: rgba(0, 0, 0, 0.15);
        }

      </style>
@endpush
