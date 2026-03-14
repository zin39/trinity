<?php

namespace App\ViewComposer;

use Illuminate\View\View;

class AdminSidebarComposer
{
    public function __construct()
    {
    }

    public function create(View $view)
    {
        // Sidebar navigation is now hardcoded in the sidebar view
        // with routes to the new page editors
    }
}
