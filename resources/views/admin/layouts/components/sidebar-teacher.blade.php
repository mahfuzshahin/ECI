 <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('public/admin_assets/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="{{ route('teacher.dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
		</li>
		
		{{-- <li class="treeview">
          <a href="#">
            <i class="fa fa-graduation-cap"></i>
            <span>Teacher Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('department-teachers.create') }}"><i class="fa fa-long-arrow-right"></i> Add Teacher</a></li>
            <li><a href="{{ route('department-teachers.index') }}"><i class="fa fa-long-arrow-right"></i> Teacher List</a></li>
          </ul>
		</li>
		 --}}

        

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>