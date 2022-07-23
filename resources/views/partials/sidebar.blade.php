<div class="d-flex flex-column flex-shrink-0  bg-gray-700 text-white h-screen" style="width: 280px; ">
    @auth
    <div class="dropdown bg-gray-600 px-3 py-3 w-full">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="64" height="64" class="rounded-circle me-2">
            <strong class="text-white">{{ auth()->user()->name }}</strong>
        </a>
        <ul class="dropdown-menu  text-white shadow" aria-labelledby="dropdownUser2 ">
            <li><a class="dropdown-item" href="/profil-{{ Auth::user()->role }}">Profil</a></li>
            <li><a class="dropdown-item" href="/change-password">Ubah Password</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <form action="/logout" method="post">
                    @csrf
                    <button class="dropdown-item">Sign out</button>
                </form>
            </li>
        </ul>
    </div>
    <hr>
    @if(Auth::user()->role === 'siswa')
    <ul class="nav nav-pills flex-column mb-auto ">
      <li class="nav-item">
        <a href="/" class="nav-link mt-2 text-white  {{ $active === "dashboard" ? "active" : "" }}" >
          Dashboard
        </a>
      </li>
        <a href="/profil-siswa" class="nav-link mt-2 text-white  {{ $active === "profil-siswa" ? "active" : "" }}" >
          Profil Siswa
        </a>
      </li>
      <li>
        <a href="/kehadiran-siswa" class="nav-link mt-2 text-white   {{ $active === "kehadiran-siswa" ? "active" : "" }}">
          Kehadiran hari ini
        </a>
      </li>
    </ul>
    @endif
    @if(Auth::user()->role === 'guru')
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/" class="nav-link link-dark {{ $active === "dashboard" ? "active" : "" }}" >
          Dashboard
        </a>
      </li>
        <a href="/profil-guru" class="nav-link link-dark{{ $active === "profil-guru" ? "active" : "" }}" >
          Profil Guru
        </a>
      </li>
      <li>
        <a href="/kehadiran-guru" class="nav-link link-dark  {{ $active === "kehadiran-guru" ? "active" : "" }}">
          Kehadiran hari ini
        </a>
      </li>
    </ul>
    @endif
    @if(Auth::user()->role === 'admin')
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/" class="nav-link link-dark {{ $active === "dashboard-admin" ? "active" : "" }}" >
          Dashboard
        </a>
      </li>
        <a href="/edit-siswa" class="nav-link link-dark {{ $active === "edit-siswa" ? "active" : "" }}" >
          Edit Students
        </a>
      </li>
      <li>
        <a href="/edit-guru" class="nav-link link-dark  {{ $active === "edit-guru" ? "active" : "" }}">
          Edit Teachers
        </a>
      </li>
    </ul>
    @endif
    @endauth
</div>
