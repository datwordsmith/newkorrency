<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.inc._head')

    @livewireStyles
</head>
<body class="">
      <main id="home">
          <!-- Navbar -->
          @include('layouts.inc._admin_navbar')

          <div class="container-fluid position-relative pb-5" id="hero">

            <div class="pt-5 py-auto text-center text-white">
                <h3>Dashboard</h3>
            </div>

          </div>


          @yield('content')

          <!--Footer-->
          @include('layouts.inc._footer')
      </main>

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
