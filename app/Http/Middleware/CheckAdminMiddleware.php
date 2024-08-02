<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kiểm tra nếu người dùng đã đăng nhập và có vai trò là admin
        if (Auth::check()==true && Auth::user()->role == '1') {
            return $next($request);
        }

        // Nếu không phải admin, chuyển hướng tới trang đăng nhập
        return redirect()->route('login')->with(['message' => 'Yêu cầu đăng nhập']);
    }
}
