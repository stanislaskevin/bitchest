<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkIsAdminOrMemberOrSelf
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $requestedUserId = $request->route()->parameter('id');

        if(
            Auth::user()->role === 2 ||
            Auth::user()->role === 3 ||
            Auth::user()->id == $requestedUserId
        ) {
            return $next($request);
        }

        else {
            return response()->json(['error' => 'Unauthorized'], 403);
        }
    }
}
