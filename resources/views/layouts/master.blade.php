<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title>{{ config('app.name', 'Yohli') }} - @yield('title')</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
@include('partials.styles')

</head>
<body>
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Header Container
        ================================================== -->
        <header id="header-container" class="fullwidth">
            @include('partials.header')
        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <!-- The title bar is not a compulsory field -->
        @yield('title_bar')

        @yield('content')

        <!-- Footer
        ================================================== -->
        @include('partials.footer')
        <!-- Footer / End -->
    </div>
    <!-- Wrapper / End -->

    <!-- Scripts
    ================================================== -->
    @include('partials.scripts')
</body>