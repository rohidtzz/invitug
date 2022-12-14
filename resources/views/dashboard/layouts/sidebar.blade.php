@section('sidebar')

<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#">
        <img src="{{ asset('landing/img/logo/'.Auth()->user()->logo) }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">{{ substr(Auth()->user()->name,24) }}</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        @if (Auth()->user()->role == "admin")

        <li class="nav-item">
          <a class="nav-link {{Request::is('home') ? 'active' : ''}}" href="{{ url('/home') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{Request::is('home/sezione') ? 'active' : ''}}" href="{{ url('/home/sezione') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-circle-08 text-primary text-lg opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Sezione</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{Request::is('home/pages') ? 'active' : ''}}" href="{{ url('/home/pages') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-collection text-primary text-lg opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Pages</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{Request::is('home/users') ? 'active' : ''}}{{Request::is('home/users/search') ? 'active' : ''}}" href="{{ url('/home/users') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-02 text-primary text-lg opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Users</span>
            </a>
          </li>


          @else

          <li class="nav-item">
            <a class="nav-link {{Request::is('home/member') ? 'active' : ''}}" href="{{ url('/home/member') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-circle-08 text-primary text-lg opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Member</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{Request::is('home/profile') ? 'active' : ''}}" href="{{ url('/home/profile') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-collection text-primary text-lg opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Profile</span>
            </a>
          </li>

        @endif




        {{-- <li class="nav-item">
          <a class="nav-link

          {{Request::is('home/transaction') ? 'active' : ''}}
          {{Request::is('home/transaction/search') ? 'active' : ''}}

          " href="{{ url('home/transaction') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Transaction</span>
          </a>
        </li> --}}

        {{-- @if (Auth()->user()->role == "admin" || Auth()->user()->role == "kordinator")
        <li class="nav-item">
          <a class="nav-link

          {{Request::is('home/users') ? 'active' : ''}}
          {{Request::is('home/users/search') ? 'active' : ''}}

          " href="{{ url('/home/users') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Users</span>
          </a>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link

            {{Request::is('home/profile') ? 'active' : ''}}
            {{Request::is('home/profile/search') ? 'active' : ''}}

            " href="{{ url('/home/profile') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Profile</span>
            </a>
          </li>
        @endif --}}

        <li class="nav-item">
          <a class="nav-link " onclick="return confirm('logout?')" href="{{ route('logout') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-button-power text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Log Out</span>
          </a>
        </li>
      </ul>
    </div>

  </aside>


@endsection
