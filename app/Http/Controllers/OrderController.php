<?php

namespace App\Http\Controllers;

use App\Models\Metode;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $data = DB::table('books')
            ->join('order_detail', 'books.id', '=', 'order_detail.book_id')
            ->join('orders', 'orders.id', '=', 'order_detail.order_id')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->select('books.kode', 'books.name', 'books.year', 'books.author', 'books.price', 'orders.*', 'order_detail.*')
            ->where('orders.user_id', '=', $id)
            ->get();

        $metode = Metode::All();
        return view('cart', compact('data', 'metode'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function payment()
    {
        $dataMetode = Metode::all();
        return view('form/paymentForm', compact('dataMetode'));
    }

    public function bayar(Request $request)
    {
        $request->validate([
            'bukti' => 'required|file|max:10000|mimes:jpg,jpeg,png',
        ]);

        $bukti = $request->file('bukti');
        $buktiname = Carbon::now()->format('YmdHis') . '_' . $bukti->getClientOriginalName();
        $buktipath = $bukti->storeAs('public/img', $buktiname);

        $bayar = new Payment;
        $bayar->metode_id = $request->input('bank');
        $bayar->bukti = $buktipath;
        // dd($bayar);
        $bayar->save();
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = new Order;
        $order->user_id = $request->input('user_id');
        $order->order_date = Carbon::now()->format('Y-m-d');
        $order->save();

        $order_detail = new Order_detail;
        $order_detail->book_id = $request->input('book_id');
        $order_detail->order_id = $order->id;
        $order_detail->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data_order = Order::join('order_detail', 'order_detail.order_id', '=', 'orders.id')
            ->join('books', 'order_detail.book_id', '=', 'books.id')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->select('users.name as nama', 'orders.order_date', 'books.name as judul', 'books.author', 'books.price', 'order_detail.quantity')
            ->get();
        return view('order', compact('data_order'));
    }
}
