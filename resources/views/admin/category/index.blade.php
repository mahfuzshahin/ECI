@extends('admin.layouts.app-template')
@section('title', 'ECI')
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
                        <a aria-expanded="true" data-toggle="tab" href="#create-subject"><i class="fa fa-user-plus" aria-hidden="true"></i>Add Categiry</a>
                    </li>
                    <li>
                        <a aria-expanded="false" data-toggle="tab" href="#subject-list"><i class="fa fa-users" aria-hidden="true"></i> Categiry List</a>
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
                                <form method="post" action="{{route('category.store')}}">
                                    @csrf
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group {{ $errors->has('full_name') ? 'has-error' : '' }}">
                                                    <label for="category_name">Category name </label> 
                                                    <input type="text" name="category_name" id="category_name" class="form-control" required>
                                                    {!! $errors->first('category_name','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group {{ $errors->has('department_id') ? 'has-error' : '' }}">
                                                    <label for="description">Description</label> 
                                                    <input type="text" name="description" id="description" class="form-control">
                                                    {!! $errors->first('description','<span class="help-block">:message</span>') !!}
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
                                            <label for="status">Status</label>                    
                                            <select name="status" id="status" class="form-control">
                                                <option value="Active">Active</option>
                                                <option value="In-Active">In-Active</option>
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
                                                        <th>#</th>
                                                        <th>Category Name</th>
                                                        <th>Description</th>
                                                        <th class="text-center">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($categories as $key=>$category)
                                                    <tr>
                                                        <td>{{++$key}}</td>
                                                        <td>{{$category->category_name}}</td>
                                                        <td>{{$category->description}}</td>
                                                        <td>{{$category->status}}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div>
                    </div>
                </div><!-- /.tab-content -->
            </div><!-- nav-tabs-custom -->
        </div><!-- left column -->
    </div>

@endsection
    