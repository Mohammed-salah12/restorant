<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
     //عرض واجهة تسجيل الدخول
     public function showLogin($guard){
        return response()->view('cms.auth.login' , compact('guard'));
    }
    // تسجيل الدخول
    public function login(Request $request){

        $validator = Validator($request->all() ,[
            'email' => 'required|email' ,
            'password' => 'required|string',
        ]);

        $credintials =[
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ] ;
        if(! $validator->fails()){
            if(Auth::guard($request->get('guard'))->attempt($credintials)){
                return response()->json(['icon' => 'success' , 'title' =>'Login is Succesfully' ] , 200);
            }
            else {
                return response()->json(['icon' => 'error' , 'title' =>'Login is Failed' ] , 400);

            }
        }
        else{
            return response()->json(['icon' => 'error' , 'title' =>$validator->getMessageBag()->first() ] , 400);
        }

    }

    // تسجيل الخروج
    public function logout(Request $request){
        $guard = auth('admin')->check() ? 'admin' : 'author';
        Auth::guard($guard)->logout();
        $request->session()->invalidate();
        return redirect()->route('view.login' , $guard);


    }

}