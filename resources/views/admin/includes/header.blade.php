<style>
    .custom-control-sm {
        margin-bottom: 1rem;
        min-height: 1rem
    }

    .custom-control-label-sm::before {
        width: 1rem;
        height: 1rem;
        background-color: #d7d2d2;
    }
    .custom-control-label-sm::after {
        width: 1rem;
        height: 1rem;
    }
    .bootbox.modal .modal-footer{
        padding-bottom: 1rem;
        background-color: white;
        border: 0;
        justify-content: center;
        padding-top: 0;
    }
    .bootbox-close-button {
        display: none;
    }
    .bootbox.modal .modal-body{
        padding-bottom: 0;
    }
    .flash-alert {
        position: fixed;
        z-index: 1;
        right: 16px;
        top: 10px;
    }
    .flash-alert.alert-success {
        background-color: rgba(76, 175, 80, .9);
        color: #fff;
    }
    .flash-alert.alert-danger {
        color: #fff;
        background-color: #ef5350;
    }
    form label.col-form-label {
        font-weight: 500;
    }
</style>
<div class="navbar navbar-expand-md navbar-dark border-transparent" style="background-color: #4A2E1F">
    <div class="navbar-brand wmin-0 mr-5" style="padding-top:5px; padding-bottom:5px">
        <a href="{{route('admin.dashboard')}}" class="d-inline-block" style="display:flex !important; align-items:center; text-decoration:none;">
            <img src="{{ asset($setting->company_logo ?? 'frontend-assets/img/logo.jpeg') }}" alt="KS" width="40" height="40" style="flex-shrink:0;">
            <span style="margin-left:10px; display:flex; flex-direction:column; line-height:1.2;">
                <span style="color:#fff; font-weight:600; font-size:0.9rem;">Karissa Subedi</span>
                <span style="color:#99782e; font-size:0.6rem; text-transform:uppercase; letter-spacing:0.05em;">Career Consultancy Services</span>
            </span>
        </a>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>

        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>
        </ul>

        <div class="ml-auto"></div>

        <ul class="navbar-nav">
            <!-- <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-bubbles4"></i>
                    <span class="d-md-none ml-2">Messages</span>
                    <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">0</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                    <div class="dropdown-content-header card-header bg-success d-flex">
                        <span class="font-weight-semibold">Notification</span>
                        
                    </div>

                </div>
            </li> -->
            @php
                $user = Auth::guard('admin')->user();
                $imagePath = asset('admin/default.png');
            @endphp

            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ $imagePath }}" class="rounded-circle mr-2" height="34" width="34" alt="">
                    <span>{{ $user->name }}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{ route('admin.change-password')}}" class="dropdown-item"><i class="icon-key"></i> Change Password</a>
                    <div class="dropdown-divider"></div>
                    <form method="post" action="{{ route('admin.logout')}}">
                        @csrf
                        <button class="dropdown-item"><i class="icon-exit2"></i> Logout</button>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>