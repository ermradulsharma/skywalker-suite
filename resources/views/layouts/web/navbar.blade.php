<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm px-lg-5 px-3" style="background-color: #060e1b !important;">
    <a href="{{ route('/') }}" class="navbar-brand d-flex align-items-center">
        <img src="{{ asset('web/img/logo.webp') }}" alt="Skywalker Logo" width="150">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto gap-3">
            <a href="{{ route('/') }}" class="nav-item nav-link {{ request()->routeIs('/') ? 'active' : '' }}">Home</a>
            <a href="{{ url('service') }}" class="nav-item nav-link">Services</a>   
            <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            <!-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">More Services</a>
                <ul class="dropdown-menu m-0">
                    <li><a href="#" class="dropdown-item">Blog Grid</a></li>
                    <li><a href="detail.html" class="dropdown-item">Blog Detail</a></li>
                </ul>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Portfolio</a>
                <ul class="dropdown-menu m-0">
                    <li><a href="price.html" class="dropdown-item">Pricing Plan</a></li>
                    <li><a href="feature.html" class="dropdown-item">Our Features</a></li>
                    <li><a href="team.html" class="dropdown-item">Team Members</a></li>
                    <li><a href="testimonial.html" class="dropdown-item">Testimonial</a></li>
                    <li><a href="quote.html" class="dropdown-item">Free Quote</a></li>
                </ul>
            </div> -->
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
        </div>
    </div>
</nav>