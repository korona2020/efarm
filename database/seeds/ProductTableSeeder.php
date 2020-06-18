<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'category_id' => 1,
            'name' => 'Bell Pepper',
            'price' => 120,
            'quantity' => 100,
            'description' => 'This is some random product description!!',
            'image' => 'product-1.jpg',
            'discount' => 30
        ]);

        Product::create([
            'category_id' => 1,
            'name' => 'Strawberry',
            'price' => 120,
            'quantity' => 100,
            'description' => 'This is some random product description!!',
            'image' => 'product-2.jpg',
            'discount' => 0
        ]);

        Product::create([
            'category_id' => 1,
            'name' => 'Green Beans',
            'price' => 120,
            'quantity' => 100,
            'description' => 'This is some random product description!!',
            'image' => 'product-3.jpg',
            'discount' => 0
        ]);

        Product::create([
            'category_id' => 2,
            'name' => 'Purple Cabbage',
            'price' => 120,
            'quantity' => 100,
            'description' => 'This is some random product description!!',
            'image' => 'product-4.jpg',
            'discount' => 15
        ]);

        Product::create([

            'category_id' => 2,
            'name' => 'Tomato',
            'price' => 120,
            'quantity' => 100,
            'description' => 'This is some random product description!!',
            'image' => 'product-5.jpg',
            'discount' => 0
        ]);

        Product::create([

            'category_id' => 3,
            'name' => 'Brocolli',
            'price' => 120,
            'quantity' => 100,
            'description' => 'This is some random product description!!',
            'image' => 'product-6.jpg',
            'discount' => 0
        ]);

    }
}
