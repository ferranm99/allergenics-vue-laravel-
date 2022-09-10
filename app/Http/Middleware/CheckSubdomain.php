<?php

namespace App\Http\Middleware;

use App\Enums\CountryLocaleEnum;
use Closure;
use Illuminate\Http\Request;

class CheckSubdomain
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if ($request->country ?? false) {
            $country = $request->country;
            $locale = CountryLocaleEnum::getLocaleFromCountry($country);
        }
        else {
            $country = 'www'; // TODO: make a default
            $locale = CountryLocaleEnum::getLocaleFromCountry($country);
        }

        if(session()->isStarted()){
            session()->put('country', $country);
            session()->put('locale', $locale);
        }
        /*ray(
            __METHOD__,
            $request->session()->all(),
            $request
        );*/

        return $next($request);
    }
}
