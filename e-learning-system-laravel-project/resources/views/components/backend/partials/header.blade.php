 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
         <li class="nav-item d-none d-sm-inline-block">
             <a href="{{ url('/') }}" class="nav-link">Home</a>
         </li>
     </ul>

     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
         <!-- Navbar Search -->
         <li class="nav-item">
             <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                 <i class="fas fa-search"></i>
             </a>
             <div class="navbar-search-block">
                 <form class="form-inline">
                     <div class="input-group input-group-sm">
                         <input class="form-control form-control-navbar" type="search" placeholder="Search"
                             aria-label="Search" />
                         <div class="input-group-append">
                             <button class="btn btn-navbar" type="submit">
                                 <i class="fas fa-search"></i>
                             </button>
                             <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                 <i class="fas fa-times"></i>
                             </button>
                         </div>
                     </div>
                 </form>
             </div>
         </li>

         <!-- Messages Dropdown Menu -->
         <li class="nav-item dropdown">
             <a class="nav-link" data-toggle="dropdown" href="#">
                 <i class="fa-solid fa-gear"></i>
                 {{-- <span class="badge badge-danger navbar-badge">3</span> --}}
             </a>
             <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                 <a href="{{ route('homepage') }}" class="dropdown-item">
                     <!-- Message Start -->
                     <div class="media">
                         <i class="fas fa-home"></i>
                         <div class="media-body">
                             <h3 class="dropdown-item-title text-center">

                                 Home Page

                             </h3>
                         </div>
                     </div>
                     <!-- Message End -->
                 </a>
                 <div class="dropdown-divider"></div>
                 <a href="{{ route('profile.detail') }}" class="dropdown-item">
                     <!-- Message Start -->
                     <div class="media ">
                         <i class="fa-solid fa-circle-user"></i>
                         <div class="media-body">
                             <h3 class="dropdown-item-title text-center">
                                 Profile
                             </h3>
                         </div>
                     </div>
                     <!-- Message End -->
                 </a>
             </div>
         </li>
         <!-- Notifications Dropdown Menu -->
         <li class="nav-item dropdown">
             <a class="nav-link" data-toggle="dropdown" href="#">
                 <i class="far fa-bell"></i>
                 <span class="badge badge-warning navbar-badge">{{Auth::user()->unreadNotifications->count()}}</span>
             </a>
             <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                 <span class="dropdown-item dropdown-header">{{Auth::user()->unreadNotifications->count()}} Notifications</span>
                 <div class="dropdown-divider"></div>
                 @foreach (Auth::user()->unreadNotifications as  $notification)
                     <a class="dropdown-item"
                         href="{{ $notification->data['action_url'] }}">{{ $notification->data['message'] }}</a>
                 @endforeach
                 <div class="dropdown-divider"></div>
             </div>
         </li>
         <li class="nav-item">
             <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                 <i class="fas fa-expand-arrows-alt"></i>
             </a>
         </li>
         <li class="nav-item">
             <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                 <i class="fas fa-th-large"></i>
             </a>
         </li>
     </ul>
 </nav>
 <!-- /.navbar -->
