<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            @auth
            @if (auth()->user()->level=="petugas")
            <a class="nav-link collapsed {{ ($active === "dash_petugas") ? 'active' : '' }}" href="/petugas/dashboard"> <i class='bx bxs-dashboard' style="color:black"></i><span class="text-dark">Dashboard</span> </a>
            <hr class="my-0">
            <a class="nav-link collapsed {{ ($active === "surat_perintah") ? 'active' : '' }}" href="/pengawalan"> <i class='bx bxs-report' style="color:black"></i><span class="text-dark">Pengawalan</span> </a>
            <hr class="my-0">
            @elseif (auth()->user()->level=="operator")
            <a class="nav-link collapsed {{ ($active === "pengajuan") ? 'active' : '' }}" href="/aju/pengawalan"> <i class="bi bi-truck" style="color:black"></i><span class="text-dark">Pengawalan</span> </a>
            <hr class="my-0">
            <li class="nav-item">
            <a class="nav-link collapsed {{ ($active === "hasil_uji"|| $active === 'input_parameter') ? 'active' : '' }}" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-clipboard2" style="color:black"></i><span class="text-dark">Organoleptik</span><i class="bi bi-chevron-down ms-auto" style="color: black"></i> </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <hr class="my-0">
                <li> <a class="nav-link collapsed {{ ($active === "hasil_uji") ? 'active' : '' }}" href="/hasil-uji/organoleptik"> <i class="bi bi-circle" style="color:black"></i><span class="text-dark">Hasil Uji</span> </a></li>
                <hr class="my-0">
                <li> <a class="nav-link collapsed {{ ($active === "input_parameter") ? 'active' : '' }}" href="/input-parameter/organoleptik"> <i class="bi bi-circle" style="color:black"></i><span class="text-dark">Input Parameter</span> </a></li>
            </ul>
        </li>
        <hr class="my-0">
        <a class="nav-link collapsed {{ ($active === "lokasi_iki") ? 'active' : '' }}" href="/daftar/lokasi"> <i class="bi bi-geo-alt-fill" style="color:black"></i><span class="text-dark">Lokasi IKI</span> </a>
        <hr class="my-0">
        @endif
        @endauth
        </li>

        @auth
        <li class="nav-item">
            <form action="/logout" method="post" class="nav-link collapsed">
                @csrf
                <button type="submit" class="nav-link collapsed">
                    <i class="bi bi-box-arrow-in-left" style="color:black"></i><span class="text-dark">Logout</span>
                </button>
            </form>
        </li>
        @else
        <li class="nav-item"> <a class="nav-link collapsed" href="/login"> <i class="bi bi-box-arrow-in-right"></i> <span>Login</span> </a></li>
        @endauth
        <hr class="my-0">
    </ul>
</aside>