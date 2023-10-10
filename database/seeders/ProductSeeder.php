<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                "codebar"=> "00000001",
                "description"=> "Cadena de moto MD",
                "mark"=> 1,
                "categorie"=> 1,
            ],
            [
                "codebar"=> "00000002",
                "description"=> "Manurio de moto Bera Socialista",
                "mark"=> 2,
                "categorie"=> 2,
            ],
        ];

        foreach ($products as $product) {
            $newProduct = new Product();
            $newProduct->barcode = $product['codebar'];
            $newProduct->description = $product['description'];
            $newProduct->mark = $product['mark'];
            $newProduct->categorie = $product['categorie'];
            $newProduct->save();
        }
    }
}
