<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
    use HasFactory;
    public $keyType = 'string';

    protected $fillable = [
        'order_id','product_id','quantity','total_price','price'
    ];

    public function product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
}