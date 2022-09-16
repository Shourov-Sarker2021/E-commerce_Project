<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products=[
            [
                'name'=>'Basic Tee',
                'description'=>'Sienn | Large',
                'image'=>'https://tailwindui.com/img/ecommerce-images/shopping-cart-page-01-product-01.jpg',
                'price'=>200
            ],

            [
                'name'=>'Basic Tee',
                'description'=>'Black | Large',
                'image'=>'https://tailwindui.com/img/ecommerce-images/shopping-cart-page-01-product-02.jpg',
                'price'=>200
            ],

            [
                'name'=>'Nomad Tumbler',
                'description'=>'White',
                'image'=>'https://tailwindui.com/img/ecommerce-images/shopping-cart-page-01-product-03.jpg',
                'price'=>35
            ],

            [
                'name'=>'Billfold Wallet',
                'description'=>'Natural',
                'image'=>'https://tailwindui.com/img/ecommerce-images/shopping-cart-page-01-related-product-01.jpg',
                'price'=>118
            ],

           
        ];

        foreach($products as $key=>$value){
            Product::create($value);
        }
    }
}
