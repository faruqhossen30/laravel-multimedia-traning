<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Marketing Agency</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-body text-gray-900">
    <!--Header Section Start-->
    <div class="bg-gray-100">
        <div class="px-8 md:px-16 lg:px-32">
            @include('layouts.navigation')
            {{-- @include('inc.heroarea') --}}
        </div>
    </div>

    <!--Header Section End-->

    @yield('content')

    <!-- -------footer ------->
    @include('layouts.footer')
    <!-- -------footer ------->

    {{-- <script src="{{ asset('js/index.js') }}"></script> --}}
</body>

</html>
