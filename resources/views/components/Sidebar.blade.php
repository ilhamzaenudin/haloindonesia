<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{url('dashboard')}}">
        <img src="{{ asset('img/logohaloindonesia.png') }}" class="ms-4 navbar-brand-img" style="width: 130px" alt="main_logo">
      </a>
    </div>
    <hr>
    <div>
      <ul class="navbar-nav">
        <li class="nav-item" >
          <a class="nav-link text-white {{ Request::is('dashboard') ? 'active':'' }}" href="{{ url('dashboard') }}">
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('categories') ? 'active':'' }}" href="{{ url('categories') }}">
            <span class="nav-link-text ms-1">Categories</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('add-category') ? 'active':'' }}" href="{{ url('add-category') }}">
            <span class="nav-link-text ms-1">Add Categories</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('products') ? 'active':'' }}" href="{{ url('products') }}">
            <span class="nav-link-text ms-1">Products</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('add-products') ? 'active':'' }}" href="{{ url('add-products') }}">
            <span class="nav-link-text ms-1">Add Products</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('orders') ? 'active':'' }}" href="{{ url('orders') }}">
            <span class="nav-link-text ms-1">Orders</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('users') ? 'active':'' }}" href="{{ url('users') }}">
            <span class="nav-link-text ms-1">Users</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>