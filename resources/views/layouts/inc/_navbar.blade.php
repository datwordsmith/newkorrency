<nav class="navbar navbar-expand-lg py-2 border-bottom bg-white" id="navbar">
    <div class="container narrow">
        <a href="{{ route('homepage') }}">
            <img class="" alt="" src="{{ asset('assets/images/korrency_logo.svg') }}">
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav justify-content-end ms-auto">
          <li class="nav-item">
            <a class="nav-link me-3" aria-current="page" href="#Home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-3" href="#HowItWorks">How it works</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-3" href="#FAQs">FAQs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://medium.com/@Korrency" target="_blank">Blog</a>
          </li>
            @guest

            @else
                <li class="nav-item">
                    <a class="nav-link ms-3" href="{{ route('admin') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger ms-lg-3 text-white" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-power-off"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            @endguest
        </ul>
      </div>
    </div>
  </nav>
