<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckValidRoute
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Lấy tên route từ request
        $routeName = $request->route() ? $request->route()->getName() : null;

        // Kiểm tra tên route

        // Danh sách các route hợp lệ
        $validRoutes = ['user.index', 'student.index', 'instructor.index', 'Courses.index', 'Courses-detail.index'];

        // Kiểm tra nếu route không hợp lệ
        if (!in_array($routeName, $validRoutes)) {
            dd('Redirecting to error'); // Kiểm tra điều kiện chuyển hướng
            return redirect('error');
        }

        return $next($request);
    }
}
