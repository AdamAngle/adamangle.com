<nav class="bg-transition navbar navbar-expand-lg navbar-light bg-transparent fixed-top" id="navbar-main">
  <div class="container-xl">
    <a class="brand-no-decoration" href="/">
      <span class="navbar-brand">Adam Angle</span>
    </a>
    <button data-bs-toggle="collapse" data-bs-target="#navbar-nav" aria-controls="basic-navbar-nav" type="button" aria-label="Toggle navigation" class="navbar-toggler collapsed"><span class="navbar-toggler-icon"></span></button>
    <div class="navbar-collapse collapse" id="navbar-nav">
      <div class="me-auto mb-2 mb-lg-0 navbar-nav">
        <li class="nav-item">
          <a
            class="nav-link <?= check_nav('\\App\\Controllers\\Home', 'index', 'active', '') ?>"
            href="/"
            <?= check_nav('\\App\\Controllers\\Home', 'index', 'aria-current="page"', '') ?>>
            Home
          </a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link <?= check_nav('\\App\\Controllers\\Blog', 'index', 'active', '') ?>"
            href="/blog"
            <?= check_nav('\\App\\Controllers\\Blog', 'index', 'aria-current="page"', '') ?>>
            Blog
          </a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link <?= check_nav('\\App\\Controllers\\Home', 'journey', 'active', '') ?>"
            href="/journey"
            <?= check_nav('\\App\\Controllers\\Home', 'journey', 'aria-current="page"', '') ?>>
            Journey
          </a>
        </li>
      </div>
      <form class="d-flex">
        <div class="input-group">
          <input placeholder="Search" type="text" class="mr-sm-2 form-control" />
          <button type="button" class="btn btn-outline-secondary">
            Search
          </button>
        </div>
      </form>
    </div>
  </div>
</nav>