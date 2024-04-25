<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    /**
     * Handle an authentication attempt.
     */

    public function login(LoginRequest $request)
    {
        $validatedData = $request->validated();

        $email = $validatedData['email'];
        $password = $validatedData['password'];
        $remember = $validatedData['remember'];

        //        $credentials = $request->only('email', 'password');

        if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
            $request->session()->regenerate();
            return redirect('');
        }

        return back()->with('failed', 'کاربری با این مشخصات وجود ندارد');
    }
}
