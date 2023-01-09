<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} " data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}

    <!-- App favicon -->
    {{-- <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico')}}"> --}}
    @include('layouts.head-css')
    @livewireStyles

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

{{-- <body class="font-sans antialiased bg-light"> --}}
    {{-- <x-jet-banner /> --}}
    {{-- @livewire('navigation-menu') --}}

    <!-- Page Heading -->
    {{-- <header class="d-flex py-3 bg-white shadow-sm border-bottom">
        <div class="container">
            {{ $header }}
        </div>
    </header> --}}

    <!-- Page Content -->
    {{-- <main class="container my-5">
        {{ $slot }}
    </main>

    @stack('modals')

    @livewireScripts

    @stack('scripts') --}}
{{-- </body> --}}

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.topbar')
        @include('layouts.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('layouts.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    {{-- @include('layouts.customizer') --}}
    @stack('modals')

    @livewireScripts

    <!-- JAVASCRIPT -->
    @include('layouts.vendor-scripts')
    @stack('scripts')
</body>


</html>
