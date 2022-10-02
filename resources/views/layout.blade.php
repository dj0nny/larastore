<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.min.css">
  <title>Larastore</title>
</head>
<body>
  {{-- <x-message /> --}}
  <nav class="bg-primary py-3">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-4 text-center">
          <h3>Larashop</h3>
        </div>
        <div class="col-md-8">
          <ul class="nav justify-content-center">
            @auth
              <li class="nav-item">Hi, {{ auth()->user()->name }}</li>
              <li class="nav-item">
                <form action="/auth/logout" method="POST">
                  @csrf
                  <button class="btn btn-link p-0 px-3">Logout</button>
                </form>
              </li>
            @else
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/register">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
            @endauth
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <main>
    @yield('content')
  </main>

  <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>