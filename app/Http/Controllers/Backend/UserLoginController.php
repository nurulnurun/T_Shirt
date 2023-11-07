<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserLoginController extends Controller
{
    public function UserLoginForm()
    {
        return view('Backend.User-Login');
    }

    public function LoginFormPost(Request $request)
    {
        // dd($UserLogin->all());

        $validate = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]
        );

        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate);
        }

        $filter = $request->only('email', 'password');

        $Login = auth()->attempt($filter);
        if ($Login) {
            return redirect()->route('Backend.Master');
        }

        return redirect()->route('admin.login');
    }

    public function Logout(){
        auth()->logout();
        return redirect()->route('admin.login');
    }
}
