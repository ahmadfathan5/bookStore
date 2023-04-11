<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Categories;
use App\Models\Massage;
use App\Models\Order;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookCount = Books::count();
        $genreCount = Categories::count();
        $userCount = User::count();
        $pesanCount = Massage::count();
        $orderCount = Order::count();
        return view('dashboard', compact('bookCount', 'genreCount', 'userCount', 'pesanCount', 'orderCount'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function home()
    {
        $data_buku = Books::All();
        return View('home', compact('data_buku'));
    }
}
