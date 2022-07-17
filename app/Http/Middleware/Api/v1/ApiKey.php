<?php

namespace App\Http\Middleware\Api\v1;

use Closure;
use Illuminate\Http\Request;

class ApiKey
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
        if($request->header('api_key') !== 'base64:l97+j5HsjJsdvStyKO1UxMnj2/bqM0Pv3vdwnkclYRY=')
            return response()->json(['error' => true, 'message' => ["ApiKey invalid"]], 401);
            //throw_unless($request->header('apikey') === 'base64:l97+j5HsjJsdvStyKO1UxMnj2/bqM0Pv3vdwnkclYRY=',
                //new Exception('ApiKey invalida', 401));

        return $next($request);
    }
}
