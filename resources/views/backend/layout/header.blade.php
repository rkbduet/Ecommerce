<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- User Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
          <span class="dropdown-item dropdown-header">User Name</span>
          <div class="dropdown-divider"></div>
          <a href="{{route('profile.edit')}}" class="dropdown-item">
           Profile
          </a>
          <div class="dropdown-divider"></div>
          
             <!-- Authentication -->
             <form method="POST" action="{{ route('logout') }}">
              @csrf

              <a class="dropdown-item" href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();">
                 Logout
             </a>
          </form>
           
         
          <div class="dropdown-divider"></div>
         
        </div>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->