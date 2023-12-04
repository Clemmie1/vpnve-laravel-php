<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckApiKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $apiKey = $request->header('VV-KEY');

        if (!$apiKey || $apiKey == null) {
            return response()->json([
                'success' => false,
                'error' => 'Invalid API key is NULL'
            ], 401);
        }

        $user = User::where('api_key', $apiKey)->first();

        if ($user === null) {
            return response()->json([
                'success' => false,
                'error' => 'Not found API key'
            ], 401);
        }

        return $next($request);
    }

}
