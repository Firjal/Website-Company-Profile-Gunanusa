<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login — PT. GUNANUSA UTAMA FABRICATORS</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="/site.webmanifest" />

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
      body {
        background: linear-gradient(to right, #f8f9fa, #e9ecef);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .login-card {
        max-width: 400px;
        width: 100%;
        border-radius: 1rem;
        box-shadow: 0 0 25px rgba(0,0,0,0.08);
        background: #fff;
      }

      .form-control:focus {
        border-color: #ffc107;
        box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
      }

      .login-title {
        font-weight: 600;
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
      }

      .btn-warning {
        font-weight: 600;
      }
    </style>
  </head>
  <body>

    <div class="login-card p-4">
      <div class="text-center">
        <img src="{{ asset('images/favicon/favicon-96x96.png') }}" width="60" class="mb-3">
        <h1 class="login-title">Admin Login</h1>
      </div>

      @if ($errors->any())
        <div class="alert alert-danger small">{{ $errors->first() }}</div>
      @endif

      <form method="POST" action="{{ route('login.submit') }}">
        @csrf

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control form-control-lg" required autofocus>
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control form-control-lg" required>
        </div>

        <div class="d-grid mt-4">
          <button type="submit" class="btn btn-warning btn-lg text-dark">Login</button>
        </div>
      </form>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
