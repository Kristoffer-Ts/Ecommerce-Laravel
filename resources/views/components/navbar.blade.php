  <body>
    <!-- header -->
    <div class="text-center text-light p-3 jumbotron" style="background-color: #2e5eec;">
      <div class="container">
        <img src="{{ asset('assets/logo.png') }}" alt="" width="70">
        <h2>TKIDS</h2>
        <h4 class="fw-semibold">TK Information Data System</h4>
      </div>
    </div>
    <!-- navbar -->
    <nav class="navbar sticky-top" style="background-color:  #2e5eec;">
      <div class="container-fluid navibar">
        <a class="navbar-brand text-light" href="http://bpbd.balikpapan.go.id/">
          <img src="{{ asset('assets/logo.png') }}" alt="Logo" width="30"  class="d-inline-block align-text-top">
          TKIDS
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Offcanvas dari Menu -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color: #2e5eec;">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title fw-bolder fs-3" id="offcanvasNavbarLabel" style="color: white">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link"href="dashboard.php">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="daftar.php">Data TK/PAUD</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>