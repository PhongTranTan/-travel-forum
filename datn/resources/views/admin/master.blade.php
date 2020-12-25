<!doctype html>
<html lang="en">
@include('admin.include.head')

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer 
        mdl-layout--fixed-header 
        is-small-screen">
        @include('admin.include.header')
        @include('admin.include.nav')
        <main class="mdl-layout__content">
            @yield('content')
        </main>
    </div>
    @include('admin.include.scripts')
    @stack('scripts')
</body>

</html>