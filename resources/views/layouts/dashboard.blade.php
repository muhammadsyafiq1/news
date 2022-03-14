    @include('includes.dashboard.styles')
    <body>
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div class="alpha-app">
            @include('includes.dashboard.navbar')
            @include('includes.dashboard.sidebar')
            <div class="page-content">

                <div class="container-fluid">
                    @yield('content')
                </div>
            
            
        </div><!-- App Container -->
        
        @include('includes.dashboard.footer')
        @stack('scripts')
</html>