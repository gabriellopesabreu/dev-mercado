<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            CustomerSeeder::class,
            BulkSeeder::class,
            ProductSeeder::class,
            TypePaymentSeeder::class,
            UserSeeder::class,
            OrderSeeder::class,
            OrderItemSeeder::class
        ]);
    }
}
