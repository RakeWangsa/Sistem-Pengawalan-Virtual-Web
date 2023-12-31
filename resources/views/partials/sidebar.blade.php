<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            @auth
            @if (auth()->user()->level=="petugas")
            <a class="nav-link collapsed {{ ($active === "dash_petugas") ? 'active' : '' }}" href="/petugas/dashboard"> <i class='bx bxs-dashboard'></i><span>Dashboard</span> </a>
            <a class="nav-link collapsed {{ ($active === "surat_perintah") ? 'active' : '' }}" href="/pengawalan"> <i class='bx bxs-report'></i><span>Pengawalan</span> </a>

            @elseif (auth()->user()->level=="operator")
            <a class="nav-link collapsed {{ ($active === "pengajuan") ? 'active' : '' }}" href="/aju/pengawalan"> <i class="bi bi-truck"></i><span>Pengawalan</span> </a>
        <li class="nav-item">
            <a class="nav-link collapsed {{ ($active === "organoleptik") ? 'active' : '' }}" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-clipboard2"></i><span>Organoleptik</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li> <a class="nav-link collapsed {{ ($active === "hasil_uji") ? 'active' : '' }}" href="/hasil-uji/organoleptik"> <i class="bi bi-circle"></i><span>Hasil Uji</span> </a></li>
                <li> <a class="nav-link collapsed {{ ($active === "input_parameter") ? 'active' : '' }}" href="/input-parameter/organoleptik"> <i class="bi bi-circle"></i><span>Input Parameter</span> </a></li>
            </ul>
        </li>
        <a class="nav-link collapsed {{ ($active === "lokasi_iki") ? 'active' : '' }}" href="/daftar/lokasi"> <i class="bi bi-geo-alt-fill"></i><span>Lokasi IKI</span> </a>

        @endif
        @endauth
        </li>

        @auth
        <li class="nav-item">
            <form action="/logout" method="post" class="nav-link collapsed">
                @csrf
                <button type="submit" class="nav-link collapsed">
                    <i class="bi bi-box-arrow-in-left"></i><span>Logout</span>
                </button>
            </form>
        </li>
        @else
        <li class="nav-item"> <a class="nav-link collapsed" href="/login"> <i class="bi bi-box-arrow-in-right"></i> <span>Login</span> </a></li>
        @endauth
    </ul>
</aside>