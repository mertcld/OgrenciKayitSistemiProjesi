<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class  FirebaseAuth {
    public function handle(Request $request,Closure $next){
        $uid = Session::get('uid');
        if($uid){
            return $next($request);
        } else {
            Session::flush();
            return redirect('/login');
        }
    }
}
