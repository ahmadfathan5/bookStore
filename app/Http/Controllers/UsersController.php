<?php

namespace App\Http\Controllers;

use App\Models\Massage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function profile(Request $request)
    {
        $request->session()->flush();
        // dd(Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     */

    public function index()
    {
        $data_user = User::All();
        return view('user', compact('data_user'));

    }

    public function makeMessage()
    {
        // $data_user = User::find($id);
        return view('form/makeMassageForm');
    }

    public function sendMessage(Request $request)
    {
        $pesan = new Massage;

        $pesan->massage = $request['massage'];
        $pesan->user_id = Auth::user()->id;
        // dd($pesan);
        $pesan->save();
        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('form/userFormUpdate', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if ($request->has('password')) {
            $user->password = Hash::make($request->input('password'));
        }
        $user->role = $request->input('role');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        // dd($user);
        $user->save();
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('user');
    }
}
