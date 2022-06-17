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
            CategorySeed::class,
            CustomerSeed::class,
            BulkSeed::class,
            ProductSeed::class,
            TypePaymentSeeder::class,
            UserSeeder::class,
            OrderSeeder::class,
            OrderItemSeeder::class
        ]);
    }
}
