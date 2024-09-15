<!DOCTYPE html>
<html lang="en">
    @include('frontend.partials.header')

    <body class="color-style-three">
        <!-- Start Preloader 
            ============================================= -->
        <div id="preloader">
            <div class="urane-loader-inner">
            <div class="urane-loader">
                <span class="urane-loader-item"></span>
                <span class="urane-loader-item"></span>
                <span class="urane-loader-item"></span>
                <span class="urane-loader-item"></span>
                <span class="urane-loader-item"></span>
                <span class="urane-loader-item"></span>
                <span class="urane-loader-item"></span>
                <span class="urane-loader-item"></span>
            </div>
            </div>
        </div>
        <!-- preloader end -->

        @include('frontend.partials.navbar')
        @yield('content')
        @include('frontend.partials.footer')
    </body>
</html>