<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.inc._head')

    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        main {
            flex: 1;
        }
    </style>

    @livewireStyles
</head>
<body class="light-bg">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg py-2 border-bottom bg-transparent" id="navbar">
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
                    <a class="nav-link me-3" aria-current="page" href="{{ route('homepage') }}">Home</a>
                  </li>
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
              </div>
            </div>
          </nav>



          @yield('content')

          <!--Footer-->
          <div class="container-fluid bg-transparent mt-auto">
            <div class="container narrow kcolor">
              <footer class="py-3">
                <div class="">
                  <p class=" text-center">Korrency Exchange Inc,  Canada. &copy; {{ now()->format('Y') }}. All rights reserved.</p>
                </div>
              </footer>
            </div>
          </div>

      <!-- Include jQuery -->
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

      <script src="{{ asset('assets/js/spheres.js') }}"></script>
      <script src="{{ asset('assets/js/navbar.js') }}"></script>

      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



      @livewireScripts
      @yield('scripts')
</body>
</html>
