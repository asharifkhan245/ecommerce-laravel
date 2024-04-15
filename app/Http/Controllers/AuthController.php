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
}
