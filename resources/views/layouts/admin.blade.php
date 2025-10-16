<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard - Gunanusa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- Site Logo --}}
  <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-96x96.png') }}" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon/favicon.svg') }}" />
  <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.ico') }}" />
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}" />
  <link rel="manifest" href="/site.webmanifest" />

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f9;
    }

    .sidebar {
      width: 250px;
      height: 100vh;
      position: fixed;
      background: linear-gradient(180deg, #1f2937, #374151);
      color: white;
      padding-top: 1rem;
      box-shadow: 2px 0 6px rgba(0, 0, 0, 0.1);
      transition: width 0.3s ease;
    }

    .sidebar.collapsed {
      width: 70px;
    }

    .sidebar.collapsed .sidebar-text {
      display: none;
    }

    .sidebar .logo {
        padding: 20px 0;
        display: flex;
        justify-content: center;
        align-items: center;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        margin-bottom: 1rem;
    }

    .sidebar .logo img {
        width: 180px;
        max-width: 90%;
        height: auto;
        transition: transform 0.3s ease, width 0.3s ease;
    }

    .sidebar.collapsed .logo img {
        width: 50px;
    }

    .sidebar a {
      color: #d1d5db;
      display: block;
      padding: 12px 24px;
      text-decoration: none;
      transition: background 0.2s ease-in-out;
      white-space: nowrap;
    }

    .sidebar.collapsed a {
      text-align: center;
      font-size: 0;
    }

    .sidebar.collapsed a i {
      font-size: 18px;
      margin-right: 0;
    }

    .sidebar a:hover,
    .sidebar a.active {
      background-color: #111827;
      color: #fff;
    }

    .main-content {
      margin-left: 250px;
      padding: 2rem;
      transition: margin-left 0.3s ease;
    }

    .main-content.collapsed {
      margin-left: 70px;
    }

    .topbar {
      background-color: #fff;
      border-bottom: 1px solid #e5e7eb;
      padding: 1rem 2rem;
      margin-bottom: 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .card-stats:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transition: 0.3s ease;
    }

    .profile-img {
      width: 40px;
      height: 40px;
      object-fit: cover;
      border-radius: 50%;
    }

    .dropdown-menu {
      min-width: 150px;
    }
  </style>
</head>
<body>

  {{-- Sidebar --}}
  <div class="sidebar" id="sidebar">
    <div class="logo">
      <img src="{{ asset('images/logo-gunanusa.png') }}" alt="Gunanusa Logo">
    </div>
    <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
      <i class="fas fa-home me-2"></i> <span class="sidebar-text">Dashboard</span>
    </a>
    <a href="{{ route('admin.experience.index') }}" class="{{ request()->is('admin/experience*') ? 'active' : '' }}">
      <i class="fas fa-briefcase me-2"></i> <span class="sidebar-text">Experience</span>
    </a>
    <a href="{{ route('admin.certificates.index') }}" class="{{ request()->is('admin/certificates*') ? 'active' : '' }}">
      <i class="fas fa-certificate me-2"></i> <span class="sidebar-text">Certificates</span>
    </a>
    <a href="{{ route('admin.awards.index') }}" class="{{ request()->is('admin/awards*') ? 'active' : '' }}">
      <i class="fas fa-award me-2"></i> <span class="sidebar-text">Awards</span>
    </a>
    <form method="POST" action="{{ route('admin.logout') }}">
      @csrf
      <button class="btn btn-link text-danger w-100 text-start ps-4 mt-4">
        <i class="fas fa-sign-out-alt me-2"></i>
        <span class="sidebar-text">Logout</span>
      </button>
    </form>
  </div>

  {{-- Main Content --}}
  <div class="main-content" id="mainContent">
    {{-- Topbar --}}
    <div class="topbar shadow-sm">
      <div class="d-flex align-items-center">
        <button id="toggleSidebar" class="btn btn-outline-secondary me-3">
          <i class="fas fa-bars"></i>
        </button>
        <h4 class="fw-bold mb-0">{{ $pageName ?? 'Page Name' }}</h4>
      </div>
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
          <img src="{{ asset('images/foto-profil.jpg') }}" alt="Admin" class="profile-img me-2">
          <strong>{{ $adminUser->name }}</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="{{ route('admin.settings.edit') }}">Settings</a></li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <form method="POST" action="{{ route('admin.logout') }}">
              @csrf
              <button class="dropdown-item text-danger">Logout</button>
            </form>
          </li>
        </ul>
      </div>
    </div>

    {{-- Page Content --}}
    @yield('admin-content')
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Sidebar Toggle Script -->
  <script>
  document.addEventListener('DOMContentLoaded', () => {
    const toggleBtn = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('mainContent');

    // Ambil status dari localStorage
    const isCollapsed = localStorage.getItem('sidebar-collapsed') === 'true';
    if (isCollapsed) {
      sidebar.classList.add('collapsed');
      mainContent.classList.add('collapsed');
    }

    toggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('collapsed');
      mainContent.classList.toggle('collapsed');

      // Simpan status ke localStorage
      const collapsed = sidebar.classList.contains('collapsed');
      localStorage.setItem('sidebar-collapsed', collapsed);
    });
  });
</script>

</body>
</html>
