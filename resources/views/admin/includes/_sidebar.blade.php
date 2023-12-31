@php
    $segment = Request::segment(3);
    $route = Route::currentRouteName();
@endphp
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <div class="user-panel d-flex align-item-center">
        <div class="">
          <img src="{{ asset('uploads\employees\default.png') }}" style="width:40px;height:40px;border-radius:50%" class="" alt="User Image">
        </div>
        <div class="info" style="margin-top:10px">
          <p> الادمن</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">

        <!--<li class="header">MAIN NAVIGATION</li>-->
        <li class="active">
            <a href=""><i class="fa fa-dashboard text-aqua"></i> <span> لوحة التحكم</span></a>
        </li>
      
        
        <!-- users -->
        <li class="{{ $segment == 'employees' ? 'active' : '' }} users-active-li roles-list-active-li role-active-li treeview">
            <a href="users.html">
                <i class="fa fa-user-plus"></i> <span>الموظفيين</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ $route == 'employees.index' ? 'active' : '' }}">
                    <a href="{{ route('employees.index') }}">
                        <i class="fa fa-angle-double-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"></i>
                        <span>الموظفيين</span>
                    </a>
                </li>
                <li class="{{ $route == 'aemployees.create' ? 'active' : '' }}">
                    <a href="{{ route('employees.create') }}">
                        <i class="fa fa-angle-double-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"></i>
                        <span>اضافة موظف</span>
                    </a>
                </li>
            </ul>
        </li>
        
           
                
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>