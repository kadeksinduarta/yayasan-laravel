<nav class="navbar navbar-expand-lg navbar-light py-3">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#home">Yayasan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-ite">
            <a class="{{ request()->is('/') ? 'active' : 'off'}}  nav-link" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-ite">
            <a class="{{ request()->is('what-we-do') ? 'active' : 'off' }} nav-link" href="/what-we-do">What We Do</a>
          </li>
          <li class="nav-ite">
            <a class="{{ request()->is('schedule') ? 'active' : 'off' }} nav-link" href="/schedule">Our Schedule</a>
          </li>
          <li class="nav-item">
            <a class="{{ request()->is('contact') ? 'active' : 'off' }} nav-link contact" href="/contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>