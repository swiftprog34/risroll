<?php

namespace App\Http\Middleware;

use App\Models\Site;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Symfony\Component\HttpFoundation\Response;

class ChooseCity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $sites = Site::all()->pluck('prefix')->all();
        $currentCity = session()->get('city');

        if(in_array($request->segment(1), $sites)) {

            if( $currentCity != null && $currentCity != $request->segment(1)) {
                session()->flush();
            }
            $request->session()->put('city', $request->segment(1));
        } else {
            $request->session()->put('city', 'samara');
        }
        return $next($request);
    }
}
