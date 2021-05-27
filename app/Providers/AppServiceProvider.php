<?php

namespace App\Providers;

use App\Models\Company;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\TicketStatus;
use App\Models\TicketPriority;
use App\Models\Group;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        #View::share('ticketstatuses', TicketStatus::all());
        #View::share('ticketpriorities', TicketPriority::all());
        #View::share('groups', Group::all());
        #View::share('companies', Company::all());
    }
}
