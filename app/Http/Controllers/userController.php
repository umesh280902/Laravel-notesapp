<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getlogin(){
        return view('login');
    }

    public function postlogin(Request $request){
        // Validation rules
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Attempt to log the user in
        if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
            // Authentication passed
            return response()->json(['message' => 'Login successful'], 200);
        } else {
            // Authentication failed
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }

    public function getsignup(){
        return view('signup');
    }

    public function postsignup(Request $request){
        // Validation rules
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8|confirmed',
            ]);

            // Hashing the password
            $hashedPassword = Hash::make($validated['password']);

            // Creating the user
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => $hashedPassword,
            ]);

            // Authenticate the user
            Auth::login($user);

            // Redirecting with a success message
            return response()->json(['message' => 'YES'], 200);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['message' => 'NO'], 400);
        }
    }

    public function userprofile(){
        if(Auth::check()){
            $user=Auth::user();
            $userData=[
                'name'=>$user->name,
                'email'=>$user->email
            ];
            return view('profile',$userData);
        }else{
            return redirect()->route('login')->with('error','you must be logged in to view the page');
        }
    }
}
