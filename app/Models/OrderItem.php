<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'orders_id',
        'product_id',
        'quantity',
        'value',


    ];

    protected $table = 'orders_items';
    /*
    protected $keyType = 'int';
    protected $primaryKey = 'seq';
    public $incrementing = true;
    */
}
