<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'document',
        'email',
        'postal_code',
        'address',
        'neighborhood',
        'city',
        'number',
        'state'

    ];

    protected $table = 'Customers';
    /*
    protected $keyType = 'int';
    protected $primaryKey = 'id';
    public $incrementing = true;
    */

    public function order() {
        return $this->hasMany(Order::class);
    }

    public function userHasCustomers() {
        return $this->hasMany(UserHasCustomer::class);
    }

}
