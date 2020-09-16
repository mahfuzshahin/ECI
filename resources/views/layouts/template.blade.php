@section('main-header')
    @include('layouts.components.header')
    @show
    <!-- Start content -->
    <main class="content-wrapper">
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
        @yield('main-content')
        <!-- End PAge Content -->
    </main>
    <!-- End Container fluid  -->
    @yield('modals')
@section('main-footer')
    @include('layouts.components.footer')
@show