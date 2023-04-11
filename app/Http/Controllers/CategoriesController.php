<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_genre = Categories::All();
        return view('genre', compact('data_genre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form/genreForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $genre = new Categories;

        $genre->name = $request['name'];
        // dd($genre);
        $genre->save();
        return redirect('genre');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $genre = Categories::find($id);
        return view('form/genreFormUpdate', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $genre = Categories::find($id);
        $genre->name = $request->input('name');

        $genre->save();
        return redirect('genre');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $genre = Categories::find($id);
        $genre->delete();
        return redirect('genre');

    }
}
