<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SingleLoginMiddleware
{
     public function handle($request, Closure $next)
    {
        if (Session::has('user_id')) {

            $dbToken = DB::table('tbl_users')
                ->where('id', Session::get('user_id'))
                ->value('login_token');

            if ($dbToken !== Session::get('login_token')) {
                Session::flush();
                return redirect('/')->with('error', 'Logged in from another device');
            }
        }

        return $next($request);
    }
}
