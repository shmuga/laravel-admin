<?php namespace App\Http\Middleware;

use App\Module;
use Closure, Session;

class AdminAuth {

    private function _excludeRoute($request){
        $routes = [
            'admin',
            'admin/login'
        ];

        foreach($routes as $route)
            if ($request->is($route))
                return false;
        return true;
    }

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
    public function handle($request, Closure $next)
	{
        $adminId = Session::get('admin');
        if ($this->_excludeRoute($request)){
//            $path = $request->path();
//            $pathArr = explode('/',$path);
//            $module = Module::where('name', '=', $pathArr[1])->first();
        }


		return $next($request);
	}

}
