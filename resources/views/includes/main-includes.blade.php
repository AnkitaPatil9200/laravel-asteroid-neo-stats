<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
    @yield('head')
</head>

<body>
    <section>
        <div>
            <h1>{{$heading}}</h1>
            @include('includes.main-content')
        </div>
        <footer>
            @include('includes.footer')
        </footer>
    </section>
    @include('includes.script')
    @yield('scripts')
</body>

</html>