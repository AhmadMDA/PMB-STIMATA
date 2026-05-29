<?php

namespace App\Http\Controllers;

use App\Models\CamabaModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function authenticate(Request $request)
    {
        // dd(hash::make('12345'));
        // dd($request->all());
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3',
        ]);

        

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
            
        //     return redirect()->intended('dashboard')->with('success', 'Login Berhasil');
        //     // return "login berhasil";
        // }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect berdasarkan level user
            switch(Auth::user()->level) {
                case 1:
                    return redirect()->intended(route('admin'));
                case 2:
                    return redirect()->intended(route('asesor'));
                case 3:
                    return redirect()->intended(route('dashboard'));
                default:
                    return redirect()->route('login');
            }
        }
        // return "login gagal";


        return back()->with('loginError', 'Login Gagal');
    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|numeric',
            'email' => 'required',
            'password' => 'required|min:8',
            // 'level_id' => 'required'
        ]);

        // if($request->file('image')){
        //     $validated['image'] = $request->file('image')->store('images');
        // }
        // $validated['level_id'] = 3;
        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);
        // CamabaModel::

        

        // $request->session()->flash('success', 'Registrasi selesai silahkan login');

        return redirect('/login')->with('success', 'Registrasi selesai silahkan login');
    }
}
