<?php

namespace App\Http\Controllers;

use App\Models\Massage;
use Illuminate\Http\Request;

class MassageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_pesan = Massage::All();
        return view('massage', compact('data_pesan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pesan = Massage::find($id);
        return view('form/massageForm', compact('pesan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pesan = Massage::find($id);
        $pesan->reply = $request->input('reply');

        // dd($pesan);
        $pesan->save();
        return redirect('massage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pesan = Massage::find($id);
        $pesan->delete();
        return redirect('massage');
    }
}
