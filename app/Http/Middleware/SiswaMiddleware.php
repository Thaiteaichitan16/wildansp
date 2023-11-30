<?php

namespace App\Http\Middleware;

use App\Models\siswa;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SiswaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }
    public function handle(Request $request, Closure $next): Response
    {
        if(!session('nisn')){
            return redirect('/admin/login')->with('pesan','Anda harus login terlebih dahulu');
        }
        return $next($request);
    }
}
