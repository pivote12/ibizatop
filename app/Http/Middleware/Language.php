<?php
/**
 * Created by PhpStorm.
 * User: julian
 * Date: 25/03/16
 * Time: 04:55 PM
 */

namespace App\Http\Middleware;
use Closure;

class Language
{

    public function handle($request, Closure $next)
    {
        if(!\Session::has('locale'))
        {
            \Session::put('locale', \Config::get('app.locale'));
        }

        app()->setLocale(\Session::get('locale'));

        return $next($request);
    }


}