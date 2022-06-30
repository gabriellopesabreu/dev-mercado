<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class UserHasCustomer extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'customer_id'
    ];

    protected $table = 'user_has_customers';
    protected $keyType = 'int';
    //protected $primaryKey = 'users_id';
    public $incrementing = true;

    public function userHasCustomers() {
        return $this->belongsTo(User::class);
    }

}

