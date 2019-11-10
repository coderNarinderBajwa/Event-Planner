 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url(Auth::user()->role)}}" class="brand-link">
      <img src="{{url('logo1.png')}}" alt=" " class="brand-image  "
           style="opacity: .8">
      <span class="brand-text font-weight-light"><img src="{{url('logo3.png')}}" alt=" " class="brand-image  "
           style="opacity: .8"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= userProfileImage(Auth::user()->id) ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url(Auth::user()->role)}}" class="d-block">{{\Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url( route('user_dashboard') )}}" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
                
                
              </p>
            </a>
            
          </li>


          

















          <li class="nav-item has-treeview  ">
            <a href="#" class="nav-link  ">
              <i class="nav-icon fa fa-cog"></i>
              <p>
                 Settings
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

                   <li class="nav-item">
                    <a href="{{url(route('user_account'))}}" class="nav-link">
                      <i class="nav-icon fa fa-user"></i>
                      <p>
                     My Account
                        
                      </p>
                    </a>
                    
                  </li>
                  <li class="nav-item">
                    <a href="{{url(route('user_password'))}}" class="nav-link">
                      <i class="nav-icon fa fa-key"></i>
                      <p>
                       Change Password
                        
                      </p>
                    </a>
                    
                  </li>


                  


                   <li class="nav-item">
                    <a href="{{url(route('user_logout'))}}" class="nav-link">
                      <i class="nav-icon fa fa-power-off"></i>
                      <p>
                        Logout
                        
                      </p>
                    </a>
                    
                  </li>
            </ul>
          </li> 


















 
          

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>