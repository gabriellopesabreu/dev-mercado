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
        Order::updateOrCreate([
        'number'=> 1,
        'date' => '00/00/2020',
        'observation'=> "riscando a caceta.",
        ]);
    }
}
