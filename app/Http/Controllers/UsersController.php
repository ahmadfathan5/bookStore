<?php

namespace App\Http\Controllers;

use App\Models\Massage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
