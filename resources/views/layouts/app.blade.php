<!DOCTYPE html>
<html lang="en">


    @include('layouts.header')

    <body>
        @include('layouts.nav')

        <div class="container-fluid px-0 main">

            @yield('content')
            
        </div>

        <div class="container-fluid  px-0  text-center" id="zz">

        @include('layouts.footer')

        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>   
        @stack('scripts')

    </body>

</html>
