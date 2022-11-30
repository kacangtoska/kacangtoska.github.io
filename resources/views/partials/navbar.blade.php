    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
      <a
        href="index.html"
        class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5"
      >
        <h2 class="m-0 text-primary">{{ env('APP_NAME') }}</h2>
      </a>
      <button
        type="button"
        class="navbar-toggler me-4"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
          <a href="index.html" class="nav-item nav-link">Home</a>
          <a href="about.html" class="nav-item nav-link">About</a>
          <a href="service.html" class="nav-item nav-link">Service</a>
          <a href="project.html" class="nav-item nav-link active">Project</a>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Pages</a
            >
            <div class="dropdown-menu bg-light m-0">
              <a href="feature.html" class="dropdown-item">Feature</a>
              <a href="quote.html" class="dropdown-item">Free Quote</a>
              <a href="team.html" class="dropdown-item">Our Team</a>
              <a href="testimonial.html" class="dropdown-item">Testimonial</a>
              <a href="404.html" class="dropdown-item">404 Page</a>
            </div>
          </div>
          <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->