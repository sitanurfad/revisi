<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
   
    </ul>

    <!-- SEARCH FORM -->
   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          Admin
        </a>


        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn">
              <i class="fa fa-sign-out mr-2"></i> Logout
            </button>
          </form>

                   </a>
          </div>
              </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>