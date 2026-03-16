<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Admin Dashboard</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/global/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/css/extra.css')}}" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <!-- /global stylesheets -->
    <style>
        td .list-icons .dropdown{
            position: static;
        }

        .custom-link-style {
            text-decoration: none !important;
        }

        .clear-all-btn{
            padding: 2px;
            font-size: 12px;
        }

        body {
            font-family: 'Manrope', sans-serif;
        }

    </style>
    <style>
        .text-primary { color: #4A2E1F !important; }
        a.text-primary:hover { color: #2E2E2E !important; }
        .bg-primary { background-color: #4A2E1F !important; }
        .btn-primary, .bg-primary-400 { background-color: #4A2E1F !important; border-color: #4A2E1F !important; }
        .btn-primary:hover { background-color: #2E2E2E !important; border-color: #2E2E2E !important; }
        .border-top-success { border-top-color: #99782e !important; }
        .bg-success-400 { background-color: #99782e !important; }
        .bg-success-600 { background-color: #d8bf6b !important; }
        .btn-success, .bg-success { background-color: #99782e !important; border-color: #99782e !important; }
        .breadcrumb-line { background-color: #3a2518 !important; }
        .breadcrumb-item a, .breadcrumb-item.active { color: rgba(255,255,255,0.8) !important; }
        .page-header-dark .breadcrumb-line { border-top: 1px solid rgba(200,164,106,0.2); }
        .nav-sidebar .nav-item-header { color: #99782e; }
    </style>
    @yield('css')
    <!-- Core JS files -->
    <script src="{{asset('admin/global/js/main/jquery.min.js')}}"></script>
    <script src="{{asset('admin/global/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/global/js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Plugins (must load before app.js) -->
    <script src="{{asset('admin/global/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    <script src="{{asset('admin/global/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="{{asset('admin/global/js/plugins/alertify.min.js')}}"></script>

    <!-- Theme JS -->
    <script src="{{asset('admin/js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/custom.js')}}"></script>
    <script src="{{asset('admin/global/js/demo_pages/form_inputs.js')}}"></script>

    @yield('script')

</head>

<body>


    @include('admin.includes.header')

    <!-- Page content -->
    <div class="page-content">

        @include('admin.includes.sidebar')

        <!-- Main content -->
        <div class="content-wrapper">
            @include('admin.includes.page_header')

            <!-- Content area -->
            <div class="content">
                @if($errors->any())
                    <div class="alert alert-danger mb-3">
                        <ul class="mb-0 pl-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </div>
            <!-- /content area -->

            @include('admin.includes.footer')

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->
    <script>
        var _token = $('meta[name="csrf-token"]').attr('content');
    </script>

</body>

</html>
