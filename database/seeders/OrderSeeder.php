<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
        'number'=> 1,
        'users_id'=> 1,
        'date' => 01/01/01,
        'type'=> '1',
        'status'=>'T',
        'customer_id'=> '1',
        'type_payment_id' => 1
        ]);
    }
}
