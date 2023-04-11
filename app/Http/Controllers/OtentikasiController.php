<?php

namespace App\Http\Controllers;

use App\Models\Otentikasi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class OtentikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function otentikasi(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role == 'admin') {
                return redirect('/dashboard');
            }
            return redirect('/');
        }
        Session::flash('status', 'login invalid');
        return redirect('/login');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');

    }
    /**
     * Show the form for creating a new resource.
     */
    public function registerProses(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|max:255',
            'phone' => 'max:255',
            'address' => 'required',
        ]);
        $request['password'] = Hash::make($request->password);
        // dd($request->password);
        $user = User::create($request->all());

        return redirect('/login');
    }

}
