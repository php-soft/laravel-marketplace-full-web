<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use App\Type;

class ComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View()->composer('layouts.app', function ($view) {
            $types = Type::all();
            $view->with('types', $types);
        });
    }
}
