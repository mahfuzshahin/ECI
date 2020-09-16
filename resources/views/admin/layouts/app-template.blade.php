@section('main-header')
    @include('admin.layouts.components.header')
@show
    
    @section('main-sidebar')     
        <!-- Main Sidebar -->
        
        @if ( Auth::guard('admin')->user() == null )
            @include('admin.layouts.components.sidebar-department')
        @else
            @include('admin.layouts.components.sidebar-student')
        @endif
        <!-- End Main Sidebar -->
    @show
    <!-- Page wrapper  -->
    <div class="content-wrapper">
        @yield('breadcome')
        <!-- End Bread crumb -->
        <!-- Start content -->
        <section class="content">
            <!-- Start Page Content -->    
            @section('flash-message')
                <!-- Global Flash Message -->
                {{-- @include('flash::message') --}}
                <!-- End Global Flash Message -->
            @show            
            <!-- Page header -->
            @yield('page-header')
            <!-- End Page header -->
            <!-- Content area -->
            @yield('content')
            <!-- End PAge Content -->
        </section>
        <!-- End Container fluid  -->
    </div>
    @yield('modals')
@section('main-footer')
    @include('admin.layouts.components.footer')
@show