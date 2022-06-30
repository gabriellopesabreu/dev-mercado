<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'price',
        'description',
        'color',
        'quantity',
        'height',
        'width',
        'depth',
        'weight',
        'category_id',
        'active',
        'bulk_slug'

    ];

    protected $table = 'products';
    /*
    protected $keyType = 'int';
    protected $primaryKey = 'id';
    public $incrementing = true;
    */

    public function item() {
        return $this->hasMany(OrderItem::class);
    }

    public function stock() {
        return $this->hasMany(Stock::class);
    }

    public function alternativeUnit() {
        return $this->hasMany(AlternativeUnit::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function bulk() {
        return $this->belongsTo(Bulk::class);
    }

}
