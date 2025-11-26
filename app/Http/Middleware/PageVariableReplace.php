<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PageVariableReplace
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
        $response = $next($request);

        // get content (I assume you use only HTML view)
        $html = $response->getContent();

        // $html = str_replace("{company_name}", $morisconfig->company_name, $html);
        $html = str_replace("{country}", ALL_DATA_LOC['country'], $html);

        $html = str_replace("{state}", ALL_DATA_LOC['regionName'], $html);
        $html = str_replace("{State}", ALL_DATA_LOC['regionName'], $html);
        $html = str_replace("[State]", ALL_DATA_LOC['regionName'], $html);
        $html = str_replace("[state]", ALL_DATA_LOC['regionName'], $html);
        $html = str_replace("{state name}", ALL_DATA_LOC['regionName'], $html);
        $html = str_replace("{statename}", ALL_DATA_LOC['regionName'], $html);
        $html = str_replace("{stateName}", ALL_DATA_LOC['regionName'], $html);
        $html = str_replace("{StateName}", ALL_DATA_LOC['regionName'], $html);
        $html = str_replace("{Statename}", ALL_DATA_LOC['regionName'], $html);
        $html = str_replace("{city}", ALL_DATA_LOC['city'], $html);
        $html = str_replace("{City}", ALL_DATA_LOC['city'], $html);
        $html = str_replace("[City]", ALL_DATA_LOC['city'], $html);
        $html = str_replace("[city]", ALL_DATA_LOC['city'], $html);
        $html = str_replace("{city name}", ALL_DATA_LOC['city'], $html);
        $html = str_replace("{cityname}", ALL_DATA_LOC['city'], $html);
        $html = str_replace("{Cityname}", ALL_DATA_LOC['city'], $html);
        $html = str_replace("{cityName}", ALL_DATA_LOC['city'], $html);
        $html = str_replace("{CityName}", ALL_DATA_LOC['city'], $html);
        $html = str_replace("[CityName]", ALL_DATA_LOC['city'], $html);
        $html = str_replace("[cityname]", ALL_DATA_LOC['city'], $html);
        $html = str_replace("[City Name]", ALL_DATA_LOC['city'], $html);
        $html = str_replace("{city_uppercase}", strtoupper(ALL_DATA_LOC['city']), $html);

        $html = str_replace("{current_year}", date('Y'), $html);
        $html = str_replace("{year}", date('Y'), $html);
        $html = str_replace("{ year}", ' ' . date('Y'), $html);
        $html = str_replace("(year)", date('Y'), $html);
        $html = str_replace("[Year]", date('Y'), $html);
        $html = str_replace("{Year}", date('Y'), $html);
    
        // here you set modified content for response
        $response->setContent($html);

        // finally you return response with modified content
        return $response;
    }
}
