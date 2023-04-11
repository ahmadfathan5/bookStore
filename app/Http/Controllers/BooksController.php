<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_buku = DB::table('books')
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->select('books.*', 'categories.name as genre')
            ->get();
        return View('book', compact('data_buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_genre = Categories::All();
        return view('form/bookForm', compact('data_genre'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cover' => 'required|file|max:10000|mimes:jpg,jpeg,png',
        ]);

        $cover = $request->file('cover');
        $covername = $cover->getClientOriginalName();
        $coverpath = $cover->storeAs('public/img', $covername);

        $buku = new Books;

        $buku->kode = $request->input('kode');
        $buku->name = $request->input('name');
        $buku->year = $request->input('year');
        $buku->author = $request->input('author');
        $buku->price = $request->input('price');
        $buku->category_id = $request->input('genre');
        $buku->cover = $coverpath;

        $buku->save();

        return redirect('book');

    }

    /**
     * Display the specified resource.
     */
    public function search(Request $request)
    {
        $keyword = $request->input('search');
        $books = Books::where('name', 'LIKE', "%$keyword%")->get();

        return view('search', compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data_genre = Categories::All();
        $buku = Books::find($id);
        return view('form/bookFormUpdate', compact('buku', 'data_genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $buku = Books::find($id);
        $request->validate([
            'cover' => 'required|file|max:10000|mimes:jpg,jpeg,png',
        ]);

        $cover = $request->file('cover');
        $covername = $cover->getClientOriginalName();
        $coverpath = $cover->storeAs('public/img', $covername);

        $buku->kode = $request->input('kode');
        $buku->name = $request->input('name');
        $buku->year = $request->input('year');
        $buku->author = $request->input('author');
        $buku->price = $request->input('price');
        $buku->category_id = $request->input('genre');
        $buku->cover = $coverpath;

        // dd($buku);
        $buku->save();

        return redirect('book');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $buku = Books::find($id);
        $buku->delete();
        return redirect('book');
    }
}
