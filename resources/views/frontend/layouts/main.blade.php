<!DOCTYPE html>
<html lang="en">
    @include('frontend.partials.header')

    <body>
        @include('frontend.partials.navbar')
        <div class="page-content">
            @yield('content')
        </div>
        @include('frontend.partials.footer')
    </body>
</html>
