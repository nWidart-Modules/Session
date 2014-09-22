<?php namespace Modules\Session\Providers;

use Illuminate\Routing\FilterServiceProvider as ServiceProvider;

class SessionFiltersServiceProvider extends ServiceProvider
{
    protected $filters = [
        'guest' => 'Modules\Session\Http\Filters\GuestFilter',
        'dashboard' => 'Modules\Session\Http\Filters\DashboardFilter',
    ];
}