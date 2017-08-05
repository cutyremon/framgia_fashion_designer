<?php

namespace App\Http\Middleware;

use App\Helpers\HelpText;
use Closure;
use Auth;
use Session;
use Lang;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        HelpText::changeLanguage();
        return $next($request);
    }
}

