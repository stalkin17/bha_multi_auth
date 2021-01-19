<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link text-danger"><h4>{{config('app.name')}}-DASHBOARD</h4></a>
      </li>     
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">    
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">         
          <i class="far fa-user-circle fa-2x"></i>      
        </a>
        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">         
        
          <a href="#" class="dropdown-item">
            <i class="fas fa-cog mr-2"></i> Profile Settings          
          </a>
          
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-log-out mr-2"></i> Sign Out
            
          </a>

         
        </div>
      </li>

     
     
    </ul>
  </nav>
  <!-- /.navbar -->