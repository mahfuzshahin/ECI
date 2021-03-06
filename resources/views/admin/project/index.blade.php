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
            @if(session()->has('success'))
                <div class="alert  alert-success alert-dismissible"> 
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {!! session('success') !!}
                </div>
            @endif
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active">         
                        <a aria-expanded="true" data-toggle="tab" href="#create-subject"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Project</a>
                    </li>
                    <li>
                        <a aria-expanded="false" data-toggle="tab" href="#subject-list"><i class="fa fa-users" aria-hidden="true"></i> Project Lists</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="create-subject">
                    <div class="row">
                        <div class="col-md-9">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title"><?= @$heading; ?></h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form action="{{route('project.store')}}" method="POST">
                                    
                                    {{ csrf_field() }}
                                    <div class="box-body">
                                        <div class="row">
                                            
                                            <div class="col-md-12">
                                                <div class="form-group {{ $errors->has('Title') ? 'has-error' : '' }}">
                                                    <label for="name">Title</label> 
                                                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                                                    {!! $errors->first('title','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                        
                                            <div class="col-md-12">
                                                <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                                    <label for="project_description">Description</label> 
                                                    <textarea class="form-control" id="project_description" name="description"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.box-body -->
                                    <div class="box-footer text-right">
                                        <input type="reset" value="Reset" class="btn btn-danger">
                                        <input type="submit" value="Submit" class="btn btn-primary">
                                    </div>
                                
                            </div><!-- /.box -->
                            <!-- Form Element sizes -->
                        </div>


                        <div class="col-md-3">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                </div><!-- /.box-header -->

                                    <div class="box-body">
                                        <div class="form-group">    
                                            <label for="status">Select Status</label>                    
                                            <select name="status" id="status" class="form-control">
                                                <option value="1">Active</option>
                                                <option value="2">Inactive</option>
                                            </select>
                                        </div>
                                    </div><!-- /.box-body -->

                                </form>
                            </div><!-- /.box -->
                            <!-- Form Element sizes -->
                        </div>
                    </div>

                    </div>
                    
                    <div class="tab-pane" id="subject-list">
                        <div class="row">
                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <!-- <h3 class="box-title"></h3> -->
                                        </div><!-- /.box-header -->
                                        <div class="box-body">
                                            <table class="table table-bordered table-striped" id="example2">
                                                <thead>
                                                    <tr>
                                                        <th>Department Name</th>
                                                        <th>Short Name</th>
                                                        <th>Faculty Name</th>
                                                        <th class="text-center">Status</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                
                                                </tbody>
                                            </table>
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                    </div><!-- /.tab-pane -->
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
