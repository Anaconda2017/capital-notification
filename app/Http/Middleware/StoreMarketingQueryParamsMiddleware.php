<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class StoreMarketingQueryParamsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $utmQueryParams = [
            'utm_source',
            'utm_medium',
            'utm_campaign',
            'utm_id'
        ];
        foreach ($utmQueryParams as $utmQueryParam) {
            if ($request->has($utmQueryParam)) {
                session()->put($utmQueryParam, $request->input($utmQueryParam));
            }
        }

        return $next($request);
    }
}