<?php

namespace App\Http\Middleware;

use Closure;

use App\Models\Admin\Users;

class RoleperMiddleware
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
        //示例代码
        //获取管理员的信息
        $users = Users::find(session('uid'));
        //根据管理员的信息查找相应的角色
        $roles = $users->users_role()->get();

        $prs = [];
        foreach($roles as $k => $v){
            //通过角色找到相对应的权限
            $pers = $v->role_per()->get();

            //遍历权限
            foreach($pers as $kk => $vv){
                //把所有的权限的路径 保存到数组当中
               $prs[] = $vv->perurl;
            }
        }
        //因为角色对应的权限是有重复的  所以就要把重复的路径进行去重
        $psr = array_unique($prs);
        //获取当前 Laravel 项目的控制器或者方法名
        $urls = \Route::current()->getActionName();
        dump($urls);
        //判断权限存在
        if(in_array($urls, $psr)){
            return $next($request);
        } else {
            // return redirect('/admin/power');
        }
    }
}
