<?php

namespace App\Providers;

use App\Models\Application;
use App\Models\ConsultationRequest;
use App\ViewComposer\AdminSidebarComposer;
use App\ViewComposer\SettingsComposer;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $unreadCount = Application::where('is_read', false)->count();
            $unreadCount = ConsultationRequest::where('is_read',false)->count();
            $view->with('unreadCount', $unreadCount);
        });

        Authenticate::redirectUsing(function () {
            return route('admin.login');
        });

        View::creator(
            'admin.layouts.master', SettingsComposer::class
        );
        View::creator(
            'admin.includes.sidebar', AdminSidebarComposer::class
        );
        View::creator(
            'admin.auth.login', SettingsComposer::class
        );
        View::creator(
            'admin.auth.passwords.email', SettingsComposer::class
        );
        View::creator(
            'admin.auth.passwords.reset', SettingsComposer::class
        );
    }
}
