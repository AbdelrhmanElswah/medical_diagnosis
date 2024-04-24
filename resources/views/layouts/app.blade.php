<!DOCTYPE html>
<html lang="en">


    @include('layouts.header')

    <body>
        @include('layouts.nav')

        <div class="container-fluid main">

            @yield('content')
            
        </div>

        <div class="container my-5 text-center" id="zz">

        @include('layouts.footer')

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        @stack('scripts')

    </body>

</html>
