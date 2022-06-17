<?php

namespace Database\Seeders;

use App\Models\TypePayment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypePaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypePayment::create([
            'name'=>'credito'


        ]);
    }
}
