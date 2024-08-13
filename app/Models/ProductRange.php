<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRange extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'range_id'];
}
