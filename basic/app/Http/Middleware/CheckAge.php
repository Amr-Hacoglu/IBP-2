<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
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
        if($request->Check <= 20){
            return redirect('contect');
        }// بشكل عام مثلا لما تكون انت مسجل دخول وبدك تدخل على صفحة تسجيل الدخول رح يمنعك تدخل على صفحة تسجيل الدخول وياخدك على الصفحة الرئيسية

        return $next($request);
    }
}
