@include('layouts.head')
<header id="header" class="header fixed-top d-flex align-items-center" style="background: linear-gradient(to bottom right, #262cff, #0096ff);">
    <div class="d-flex align-items-center justify-content-between"><i class="bi bi-list toggle-sidebar-btn" style="color: white;"></i> <a href="#" class="logo d-flex align-items-center text-light" style="font-weight: bold; font-size: 25px;"><img src="{{asset('admintemplate/img/LogoBKIPM2.png')}}" style="width:50px" alt="icon-bkipm">Pengawalan Virtual</a></div>

    <nav class="header-nav ms-auto">
        @auth
        <ul class="d-flex align-items-center">
            <li class="nav-item dropdown">
                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown"> <i class="bi bi-bell-fill" style="color:white"></i> <span class="badge bg-primary bg-danger badge-number">4</span> </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                    <li class="dropdown-header"> You have 4 new notifications <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="notification-item">
                        <i class="bi bi-exclamation-circle text-warning"></i>
                        <div>
                            <h4>Lorem Ipsum</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>30 min. ago</p>
                        </div>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="notification-item">
                        <i class="bi bi-x-circle text-danger"></i>
                        <div>
                            <h4>Atque rerum nesciunt</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>1 hr. ago</p>
                        </div>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="notification-item">
                        <i class="bi bi-check-circle text-success"></i>
                        <div>
                            <h4>Sit rerum fuga</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>2 hrs. ago</p>
                        </div>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="notification-item">
                        <i class="bi bi-info-circle text-primary"></i>
                        <div>
                            <h4>Dicta reprehenderit</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>4 hrs. ago</p>
                        </div>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="dropdown-footer"> <a href="#">Show all notifications</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown"> <img src="{{asset('admintemplate/img/prabowo.jpg')}}" alt="Profile" class="rounded-circle"> <span class="d-none d-md-block dropdown-toggle ps-2 text-light">{{ auth()->user()->name }}</span> </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{ auth()->user()->name }}</h6>
                        <span>{{ ['operator' => 'Operator', 'petugas' => 'Petugas'][auth()->user()->level] }}</span>
                    </li>

                    <hr class="dropdown-divider">
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex align-items-center">
                                <i class="bi bi-box-arrow-in-left"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
                @else
                <ul class="d-flex align-items-center">
                    <li class="nav-item"> <a class="nav-link collapsed" href="/login"> <i class="bi bi-box-arrow-in-right"></i> <span>Login</span> </a></li>
                </ul>
                @endauth
            </li>
    </nav>
</header>