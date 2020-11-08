 <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('admin_assets/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="color: black;">{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
		    </li>
        <li class="treeview">
              <a href="#">
                <i class="fa fa-graduation-cap"></i>
                <span>Menu Management</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('admin/page')}}"><i class="fa fa-long-arrow-right"></i> Page</a></li>
                <li><a href="{{url('admin/category')}}"><i class="fa fa-long-arrow-right"></i> Category</a></li>
                <li><a href="{{url('admin/sub-category')}}"><i class="fa fa-long-arrow-right"></i> Sub Category</a></li>
              </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-gift"></i>
                <span>Posts</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{url('admin/post')}}"><i class="fa fa-long-arrow-right"></i> Create Post</a></li>
            </ul>
        </li>

        <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-graduation-cap"></i>
                <span>Teacher Settings</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-long-arrow-right"></i> Add Teacher</a></li>
                <li><a href="#"><i class="fa fa-long-arrow-right"></i> Teacher List</a></li>
              </ul>
        </li> -->
		

		    <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Semester Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-long-arrow-right"></i> Add Semester</a></li>
            <li><a href="#"><i class="fa fa-long-arrow-right"></i> Semester List</a></li>
          </ul>
        </li> -->

        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-clone"></i>
            <span>Program Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-long-arrow-right"></i> Add Program</a></li>
            <li><a href="#"><i class="fa fa-long-arrow-right"></i> Program List</a></li>
          </ul>
        </li> -->

        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-building-o"></i>
            <span>Syllabus Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-long-arrow-right"></i> Add Syllabus</a></li>
            <li><a href="#"><i class="fa fa-long-arrow-right"></i> Syllabus List</a></li>
          </ul>
        </li> -->
        
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Course Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-long-arrow-right"></i> Add Course</a></li>
            <li><a href="#"><i class="fa fa-long-arrow-right"></i> Course List</a></li>
          </ul>
        </li> -->

        <!-- <li class="treeview">
            <a href="#">
                <i class="fa fa-gift"></i>
                <span>Offer Settings</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-long-arrow-right"></i> Add Offer</a></li>
                <li><a href="#"><i class="fa fa-long-arrow-right"></i> Offer List</a></li>
            </ul>
        </li> -->


        <!-- <li class="treeview">
            <a href="#">
                <i class="fa fa-gift"></i>
                <span>Bill Settings</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-long-arrow-right"></i> Bill List</a></li>
            </ul>
        </li> -->


        <!-- <li class="treeview">
            <a href="#">
                <i class="fa fa-gift"></i>
                <span>Offer and Result Settings</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-long-arrow-right"></i> Offer List</a></li>
            </ul>
        </li> -->

	
	

		{{-- <li class="treeview">
          <a href="#">
            <i class="fa fa-gift"></i>
            <span>Result Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-long-arrow-right"></i> Ph.d Result</a></li>
            <li><a href="#"><i class="fa fa-long-arrow-right"></i> Mphil Result</a></li>
          </ul>
        </li> --}}

        

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>