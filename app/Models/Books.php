<?php

namespace App\Models;

use App\Models\Categories;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = ['kode', 'name', 'year', 'author', 'price', 'category_id', 'cover'];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_detail', 'order_id');
    }

}
