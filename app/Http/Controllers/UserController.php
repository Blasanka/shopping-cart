<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function register() {
        return view('user.register');
    }

    public function saveUser(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:7'
        ]);

        // $user = new User([
        //     'email' => $request->input('email'),
        //     'password' => bcrypt($request->input['password'])
        // ]);
        // $user->save();

        // return redirect()->route('user.profile')->with('success', 'Successfully registered!');

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ])) {
            return redirect()
                ->route('user.profile')
                ->with('success', 'Welcome! Your account has been successfully created!');
        }

        return redirect()
            ->back()
            ->withInput();
    }

    public function login() {
        return view('user.login');
    }

    public function getUser(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:7'
        ]);

        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ])) {
            return redirect()
                ->route('user.profile')
                ->with('success', 'Successfully loggedin!');
        }

        return redirect()->back()->withErrors(['No user found!']);
    }

    public function profile() {
        return view('user.profile');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('product.index');
    }
}
