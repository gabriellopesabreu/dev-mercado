<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bateria = Category::create([
            'name'=>'Bateria'
        ]);

        $bateria = Category::create([
            'name'=>'Xiaomi',
            'category_id'=>$bateria->id
        ]);
        
        $bateria = Category::create([
            'name'=>'Motorola',
            'category_id'=>$bateria->id
        ]);

        $celular = Category::create([
            'name'=>'Celular'
        ]);

        $celular = Category::create([
            'name'=>'Xiaomi',
            'category_id'=> $celular->id
        ]);

        $celular = Category::create([
            'name'=>'Motorola',
            'category_id'=> $celular->id
        ]);

    }
}
