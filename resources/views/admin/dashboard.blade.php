@extends('admin.layouts.app-template')


{{--  Page Title [ Important ]  --}}
@section('title', 'Welcome to Dashboard')


<!-- Flash Message [ Optional ]  -->
@section('flash-message')
@stop


<!-- Page Content -->
@section('content')
    <div class="row">

        <div class="col-md-12">
            <header class="d-header text-center">
                <h2>Welcome to Admission Dashboard</h2>
                <hr>
            </header>
        </div>
    
        @if ( !empty($departmentList) )
            @foreach ($departmentList as $department)
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                    <h3>{{ $department->Dcoount ?? '00'}}</h3>

                    <p>{{ $department->name }}</p>
                    </div>
                    <div class="icon">
                    <i class="fa fa-university"></i>
                    </div>
                    <a href="{{ route('applications.list',['department_id'=>$department->id]) }}" class="small-box-footer">
                    Application Details <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
                </div>
                <!-- ./col -->
            @endforeach
            <div class="clearfix"></div>
            <div class="col-md-12 text-right">
                {{ $departmentList->links() }}
            </div>
        @endif
        
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
