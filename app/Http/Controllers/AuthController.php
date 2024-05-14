<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class AuthController extends Controller
{


    public function login()
    {

        return view('website.login');
    }

    public function register()
    {
        return view('website.register');
    }



    public function register_user(Request $request)
    {


        $request->validate([
            'name' => 'required|',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);


        $input =  $request->all();
        $input['role']='user';

        $user = User::create($input);
        auth()->login($user);

        return redirect()->route('/');
    }

    public function login_user(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->where('password', $request->password)->first();

        if ($user) {
            Auth::login($user);
            return redirect()->route('/');
        }else{
            return redirect()->route('login');
        }
    }

    public function logout(){

        Auth::logout();
        return redirect()->route('/');

    }


    public function edit_users(Request $request, $id){

       $user =  User::find($id);

       if($user){

        if($request->name){
            $user->name  = $request->name;
        }
        if($request->email){

            $user->email = $request->email;
        }

        if($request->status){
            $user->status = $request->status;
        }

        $user->save();

        return redirect()->route('users');
       }
    }



    public function delete_user($id){
        $user = User::find($id);

        $user->delete();

        return redirect()->route('users');
    }

}
