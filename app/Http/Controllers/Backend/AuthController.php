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
    public function index(){
        return view('backend.auth.login');
    }
    public function login(AuthRequest $request){
        $auths = $request -> validated();
       if(Auth::attempt($auths)){
           return  redirect()->route('dashboard.index') -> with('success','Đăng nhập thành công');
        }
        return  redirect()->route('auth.admin') -> with('error','Email hoặc mật khẩu không chính xác');
    }
}
