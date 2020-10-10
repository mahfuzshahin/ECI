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
                        <a aria-expanded="true" data-toggle="tab" href="#create-subject"><i class="fa fa-user-plus" aria-hidden="true"></i>Add Post</a>
                    </li>
                    <li>
                        <a aria-expanded="false" data-toggle="tab" href="#subject-list"><i class="fa fa-users" aria-hidden="true"></i> Post List</a>
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
                                <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}"> 
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group {{ $errors->has('full_name') ? 'has-error' : '' }}">
                                                    <label for="page_id">Page</label> 
                                                    <select name="page_id" id="page_id" class="form-control" required>
                                                    @foreach($pages as $page)
                                                        <option value="{{$page->id}}">{{$page->page_name}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group {{ $errors->has('full_name') ? 'has-error' : '' }}">
                                                    <label for="category_id">Category</label> 
                                                    <select name="category_id" id="category_id" class="form-control" required>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group {{ $errors->has('department_id') ? 'has-error' : '' }}">
                                                    <label for="title">Title</label> 
                                                    <input type="text" name="title" id="title" class="form-control">
                                                    {!! $errors->first('title','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group {{ $errors->has('department_id') ? 'has-error' : '' }}">
                                                    <label for="file">File</label> 
                                                    <input type="file" name="file" id="file" class="form-control">
                                                    {!! $errors->first('file','<span class="help-block">:message</span>') !!}
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
                                    </div>
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
                                                        <th>Title</th>
                                                        <th>Page</th>
                                                        <th>Category</th>
                                                        <th class="text-center">Status</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                @foreach($posts as $key=>$post)
                                                    <tr>
                                                        <td>{{++$key}}</td>
                                                        <td><a href="/file/{{$post->file}}" target="_blank">{{$post->title}}</a></td>
                                                        <td>{{$post->page->page_name}}</td>
                                                        <td>{{$post->category->category_name}}</td>
                                                        <td>{{$post->status}}</td>
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
    