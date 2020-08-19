<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
    public function loginPage()
    {
        return view('login');
    }

    public function loginAuth(Request $request)
    {

        //user input validations

        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password]))
        {
            return 'success';
        } else {
            return 'login failed!';
        }
    }

    public function registerPage()
    {
        return view('register');
    }

    public function registerSave(Request $request)
    {

        //user input validations


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($user->save())
        {
            Auth::loginUsingId($user->id);
            return redirect('/check');
        } else {
            return 'registration failed!';
        }
    }

    public function logout()
    {
        Auth::logout();
    }
}
