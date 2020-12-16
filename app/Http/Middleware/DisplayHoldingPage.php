<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DisplayHoldingPage
{
    public function handle(Request $request, Closure $next)
    {
        if (config('moood.show_holding_page', true))
            return redirect('holding');

        return $next($request);
    }
}
