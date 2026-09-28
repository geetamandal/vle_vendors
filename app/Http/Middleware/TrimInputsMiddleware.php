<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrimInputsMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $input = $request->all();

        array_walk_recursive($input, function (&$value) {
            if (is_string($value)) {
                $value = preg_replace('/\s+/', ' ', trim($value)); // Trim and remove multiple spaces
            }
        });

        $request->replace($input);
        return $next($request);
    }
}
