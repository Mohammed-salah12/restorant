<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

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



    // change password
    public function changePassword(Request $request){
        return response()->view('cms.admin.changePassword');
    }

    // update password
    public function updatePassword(Request $request){

        $guard = auth('admin')->check() ? 'admin' : 'author';
        $validator = Validator($request->all() ,[
            'password' => 'required|string|current_password:' .$guard,
            'new_password' =>  'required|string|min:3|max:20|confirmed',
            'new_password_confirmation' => 'required|string|min:3|max:20',
        ]);

        if( !$validator->fails()){
            $user = auth($guard)->user();
            $user->password = Hash::make($request->get('new_password'));

            $isSaved = $user->save();

            return response()->json([
                'icon' => $isSaved ? 'success' : 'error',
                'title' => $isSaved ? "Change Password Successfully" : "Change Password is Failed",
            ] , $isSaved ? 200 : 400);
        }
        else{
            return response()->json([
                'icon' => 'error' ,
                'title' => $validator->getMessageBag()->first(),
            ],400);
        }

    }


    // Edit profile
    public function editProfile(Request $request){
        if (Auth::guard('admin')->id()){
            $admins = Admin::findOrFail(Auth::guard('admin')->id());
            return response()->view('cms.auth.editAdmin' ,compact('admins'));

        }
        elseif (Auth::guard('author')->id()){
            $authors = Author::findOrFail(Auth::guard('author')->id());
            return response()->view('cms.auth.editAuthor' , compact('authors'));
        }

    }



   //  update Profile
    public function UpdateProfile(Request $request){

    //if auth == admin
        if (Auth::guard('admin')->id()){

            $validator = Validator($request->all() , [
                'password' => 'nullable',
            ]);

            if(! $validator->fails()){
                $admins = Admin::findOrFail(Auth::guard('admin')->id());

                $admins->email = $request->get('email');
                $isSaved = $admins->save();

                if($isSaved){
                    $users = $admins->user;


                    if (request()->hasFile('image')) {

                        $image = $request->file('image');

                        $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                        $image->move('storage/images/admin', $imageName);

                        $users->image = $imageName;
                        }

                        $users->first_name = $request->get('first_name');
                        $users->last_name = $request->get('last_name');
                        $users->mobile = $request->get('mobile');
                        $users->address = $request->get('address');
                        $users->DOB = $request->get('DOB');
                        $users->actor()->associate($admins);

                    $isSaved = $users->save();

                    return ['redirect'=>route('admins.index')];

                }
            }
            else{
                return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()] ,400);
            }

        }




      // if auth == author
        elseif (Auth::guard('author')->id()){
            $validator = Validator($request->all() , [
                'password' => 'nullable',
            ]);

            if(! $validator->fails()){
                $authors = Author::findOrFail(Auth::guard('author')->id());
                $authors->email = $request->get('email');
                $isSaved = $authors->save();
                if($isSaved){
                    $users = $authors->user;

                    if (request()->hasFile('image')) {

                        $image = $request->file('image');

                        $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                        $image->move('storage/images/author', $imageName);

                        $users->image = $imageName;
                        }

                        $users->first_name = $request->get('first_name');
                        $users->last_name = $request->get('last_name');
                        $users->mobile = $request->get('mobile');
                        $users->address = $request->get('address');

                        $users->DOB = $request->get('DOB');
                        $users->actor()->associate($authors);

                    $isSaved = $users->save();

                    return ['redirect'=>route('authors.index')];

                }
            }
            else{
                return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()] ,400);
            }
        }
    }




}