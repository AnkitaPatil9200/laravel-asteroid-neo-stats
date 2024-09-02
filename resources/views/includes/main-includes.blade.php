<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Included header file -->
    @include('includes.head')
    @yield('head')
</head>

<body>
    <header>
        @include('includes.header')
    </header>
    <section>
        <div class="container">
            <!-- Included file that contains main code -->
            @include('includes.main-content')
        </div>
        <footer class="text-muted">
            <!-- Included footer file -->
            @include('includes.footer')
        </footer>
    </section>
    <!-- Included script file -->
    @include('includes.script')
    @yield('scripts')
</body>

</html>