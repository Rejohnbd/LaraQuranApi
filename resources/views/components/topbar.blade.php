<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-sign-in-alt"></i>
                <span class="d-none d-md-inline ml-2">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right p-2 border-0 rounded">
                <li class="py-0">
                    <a href="#" class="dropdown-item bg-light rounded">
                        <div class="media py-2">
                            <img src="{{ asset('img/user.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body pt-2">
                                <h3 class="dropdown-item-title">

                                </h3>
                                <p class="text-sm text-muted m-0"><i class="far fa-envelope mr-1"></i> {{ Auth::user()->email }}</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="mt-2">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger btn-block">Sign out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>