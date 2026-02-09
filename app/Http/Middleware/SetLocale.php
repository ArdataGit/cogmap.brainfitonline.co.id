<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->query('locale') ?? session('locale') ?? config('app.locale');
        if (in_array($locale, ['id', 'en'])) {
            App::setLocale($locale);
            session(['locale' => $locale]);
        }
        return $next($request);
    }
}