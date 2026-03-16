@php
    $currentRoute = Request::route()->getName();
    $Route = explode('.',$currentRoute);
@endphp
<style>
    .sidebar-dark .nav-sidebar .nav-item>.nav-link.active {
        background-color: #2E2E2E;
    }
    .sidebar-dark .nav-sidebar>.nav-item-open>.nav-link:not(.disabled) {
        background-color: #2E2E2E;
    }
    .nav-group-sub .nav-link {
        padding: 0.625rem 1.25rem 0.625rem 2.5rem;
    }

    @media (max-width: 767px) {
        .card-sidebar-mobile .tooltip{
            display: none!important;
        }
    }
    .badge {
        font-size: 12px;
        padding: 3px 7px;
        position: relative;
        top: -10px;
        right: -10px;
    }
</style>

<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md" style="background-color: #4A2E1F">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->

    <!-- Sidebar content -->
    <div class="sidebar-content">
        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <li class="nav-item">
                    <a href="{{route('admin.consultation-requests.index')}}" class="nav-link @if($Route[1]=='consultation-requests') active @endif" data-popup="tooltip" data-original-title="Enquiries" data-placement="right" data-container=".card-sidebar-mobile" id="applications-nav-link">
                        <i class="icon-envelop3"></i><span>Enquiries</span>
                        @if($unreadCount > 0)
                            <span class="badge badge-pill badge-danger"></span>
                        @endif
                    </a>
                </li>

                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Page Management & Settings
                    </div>
                    <i class="icon-menu" title="Page Management"></i>
                </li>

                @php
                    $menu_active = $Route[1] == 'pages';
                @endphp
                <li class="nav-item nav-item-submenu {{ $menu_active ? 'nav-item-open' : '' }}">
                    <a href="#" class="nav-link" data-popup="tooltip" data-original-title="Page Management" data-placement="right" data-container=".card-sidebar-mobile"><i class="icon-user-tie"></i> <span>Page Management</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Page Management" style="{{ $menu_active ? 'display: block' : '' }}">
                        <li class="nav-item"><a href="{{ route('admin.pages.homepage') }}" class="nav-link @if(($Route[2] ?? '')=='homepage') active @endif" data-popup="tooltip" data-original-title="Home Page" data-placement="right" data-container=".card-sidebar-mobile">Home Page</a></li>
                        <li class="nav-item"><a href="{{ route('admin.pages.about') }}" class="nav-link @if(($Route[2] ?? '')=='about') active @endif" data-popup="tooltip" data-original-title="About" data-placement="right" data-container=".card-sidebar-mobile">About</a></li>
                        <li class="nav-item"><a href="{{ route('admin.pages.services') }}" class="nav-link @if(($Route[2] ?? '')=='services') active @endif" data-popup="tooltip" data-original-title="Services" data-placement="right" data-container=".card-sidebar-mobile">Services</a></li>
                        <li class="nav-item"><a href="{{ route('admin.pages.information_sessions') }}" class="nav-link @if(($Route[2] ?? '')=='information_sessions') active @endif" data-popup="tooltip" data-original-title="Information Sessions" data-placement="right" data-container=".card-sidebar-mobile">Information Sessions</a></li>
                        <li class="nav-item"><a href="{{ route('admin.pages.contact') }}" class="nav-link @if(($Route[2] ?? '')=='contact') active @endif" data-popup="tooltip" data-original-title="Contact" data-placement="right" data-container=".card-sidebar-mobile">Contact</a></li>
                    </ul>
                </li>


                @php
                    $menu_active = $Route[1] == 'settings' || in_array($Route[2] ?? '', ['footer', 'common-sections']);
                @endphp
                <li class="nav-item nav-item-submenu {{ $menu_active ? 'nav-item-open' : '' }}">
                    <a href="#" class="nav-link" data-popup="tooltip" data-original-title="Website setup" data-placement="right" data-container=".card-sidebar-mobile"><i class="icon-cogs"></i> <span>Website setup</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Website setup" style="{{ $menu_active ? 'display: block' : '' }}">
                        <li class="nav-item"><a href="{{ route('admin.settings.index') }}" class="nav-link @if($Route[1]=='settings') active @endif" data-popup="tooltip" data-original-title="Basic Settings" data-placement="right" data-container=".card-sidebar-mobile">Basic Settings</a></li>
                     {{--  <li class="nav-item"><a href="{{ route('admin.pages.footer') }}" class="nav-link @if(($Route[2] ?? '')=='footer') active @endif" data-popup="tooltip" data-original-title="Footer" data-placement="right" data-container=".card-sidebar-mobile">Footer</a></li>
                        <li class="nav-item"><a href="{{ route('admin.pages.common-sections') }}" class="nav-link @if(($Route[2] ?? '')=='common-sections') active @endif" data-popup="tooltip" data-original-title="Common Sections" data-placement="right" data-container=".card-sidebar-mobile">Common Sections</a></li>
                        --}}
                    </ul>
                </li>



            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<script>
    function updateUnreadCount() {
        $.ajax({
            url: "{{ route('admin.consultation-requests.unreadCount') }}",
            method: 'GET',
            success: function(data) {
                // Log a message to the console to confirm the function is working
                console.log("Ajax request executed. Unread count:", data.unreadCount);

                var $badge = $('#unread-badge');

                if (data.unreadCount > 0) {
                    console.log("There are " + data.unreadCount + " unread applications.");

                    if ($badge.length === 0) {
                        // If the badge doesn't exist, create and append it
                        $('<span class="badge badge-pill badge-danger" id="unread-badge">' + data.unreadCount + '</span>')
                            .appendTo('#applications-nav-link');
                    } else {
                        // If the badge exists, just update the count
                        $badge.text(data.unreadCount);
                    }
                } else {
                    // If unread count is 0, remove the badge
                    $badge.remove();
                    console.log("No unread applications.");
                }
            },
            error: function(xhr) {
                console.error("Error fetching unread count:", xhr.responseText);
            }
        });
    }

    // Call the function every 5 seconds
    setInterval(updateUnreadCount, 5000);

    // Initial call to populate on load
    updateUnreadCount();
</script>
