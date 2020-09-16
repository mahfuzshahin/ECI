@extends('layouts.app-template')


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
