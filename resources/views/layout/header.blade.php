<header class="container-fluid fixed-top bg-light shadow-sm py-2">
  <div class="row align-items-center g-0">
    <div class="col-md-4 text-md-start text-center mb-2 mb-md-0">
      <a href="{{ route('home') }}" class="text-decoration-none text-dark fw-bold fs-4">
        <img width="80" src="{{ asset('images/logo.png') }}" alt="EduFun">
        EduFun
      </a>
    </div>

    <div class="col-md-8 text-md-end text-center">
      <a href="{{ route('home') }}" class="text-decoration-none mx-2 text-secondary">Home</a>

      <div class="dropdown d-inline mx-2">
        <a class="text-decoration-none text-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Category
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ route('data_science') }}">Data Science</a></li>
          <li><a class="dropdown-item" href="{{ route('network_security') }}">Network Security</a></li>
        </ul>
      </div>

      <a href="{{ route('writers') }}" class="text-decoration-none mx-2 text-secondary">Writers</a>
      <a href="{{ route('about') }}" class="text-decoration-none mx-2 text-secondary">About Us</a>
      <a href="{{ route('popular') }}" class="text-decoration-none mx-2 text-secondary">Popular</a>
    </div>
  </div>
</header>
