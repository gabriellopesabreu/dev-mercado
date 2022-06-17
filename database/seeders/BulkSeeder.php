<?php

namespace Database\Seeders;

use App\Models\Bulk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BulkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bulk::create([
            'name'=>'peso',
            'slug'=>'kg'

        ]);
    }
}
