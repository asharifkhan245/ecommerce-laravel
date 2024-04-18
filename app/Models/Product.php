<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'product_name',
        'product_description',
        'product_category',
        'product_price',
        'available_quantity',
        'main_image',
        'other_media',
        'status'
    ];
    use HasFactory;
}
