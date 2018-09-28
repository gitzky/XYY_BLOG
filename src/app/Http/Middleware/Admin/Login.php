<?php

namespace App\Http\Middleware\Admin;

use Closure;

class Login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //验证用户是否登录
        if(!session('a_id')){
            return redirect('/admin/user/login');
        }


        //执行下一步请求操作
        return $next($request);
    }
}
