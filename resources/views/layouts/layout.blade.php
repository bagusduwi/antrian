<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Display Antrian</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-bar-rating/css-stars.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo_1/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo_1/animate.min.css') }}">

    @stack('css')

</head>

<body>

    @yield('content')

    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/socket.io-client@2.1.1/dist/socket.io.js"></script>

    <script type="module">
        import Echo from 'https://cdnjs.cloudflare.com/ajax/libs/laravel-echo/1.11.3/echo.js'

        window.Echo = new Echo({
            broadcaster: 'socket.io',
            host: 'http://36.66.192.37:6602',
        });

        window.Echo.channel('next-queue')
            .listen('.next.queue', (e) => {
                console.log(e)
            })
    </script>
    @stack('js')

</body>

</html>