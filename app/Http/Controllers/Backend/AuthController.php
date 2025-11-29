<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function __construct()
    {
        
    }
    public function loginGet(){
        return view('backend.auth.login');
    }
    public function login(AuthRequest $request){
        $auths = $request -> validated();
       if(Auth::attempt($auths)){
            $role = Auth::user() -> role;
            switch($role){
                case 'admin':
                    return  redirect()->route('admin.dashboard') -> with('success','Đăng nhập thành công');
                    break;
                default:
                    return redirect() -> route('user.index') -> with('success','Đăng nhập thành công');
                    break;
            }
            return  redirect()->route('admin.dashboard') -> with('success','Đăng nhập thành công');
        }
        return  redirect()->route('auth.loginGet') -> with('error','Email hoặc mật khẩu không chính xác');
    }
}
