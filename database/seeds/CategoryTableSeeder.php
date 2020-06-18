<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Fruta & Perime'
        ]);
        Category::create([
            'name'=>'Gliko & Recel'
        ]);
        Category::create([
            'name'=>'Mish'
        ]);
        Category::create([
            'name'=>'Bulmet'
        ]);
    }
}
