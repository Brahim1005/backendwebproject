<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = new Product;
        $product->title = 'White Dress';
        $product->price = 215;
        $product->description = 'Beautiful White Dress';
        $product->quantity = 5;
        $product->image = '1705264641.png';
        $product->save();

        $product = new Product;
        $product->title = 'Yellow Dress';
        $product->price = 185;
        $product->description = 'Yellow Dress / 44-48';
        $product->quantity = 13;
        $product->image = '1703768827.png';
        $product->save();

        $product = new Product;
        $product->title = 'Orange Dress';
        $product->price = 99;
        $product->description = 'Beautiful orange Dress';
        $product->quantity = 15;
        $product->image = '1703768863.png';
        $product->save();
        
        $product = new Product;
        $product->title = 'Green Dress';
        $product->price = 285;
        $product->description = 'Beautiful Green Dress';
        $product->quantity = 5;
        $product->image = '1703768892.png';
        $product->save();

        $product = new Product;
        $product->title = 'Black Dress';
        $product->price = 150;
        $product->description = 'Black Dress / 38-44';
        $product->quantity = 22;
        $product->image = '1703768930.png';
        $product->save();

        $product = new Product;
        $product->title = 'Blue Dress';
        $product->price = 215;
        $product->description = 'Blue Dress / 44-48';
        $product->quantity = 8;
        $product->image = '1703948809.png';
        $product->save();

        $product = new Product;
        $product->title = 'Brown Dress';
        $product->price = 109;
        $product->description = 'Beautiful Brown Dress';
        $product->quantity = 9;
        $product->image = '1703949087.png';
        $product->save();

        $product = new Product;
        $product->title = 'Dark Green Dress';
        $product->price = 169;
        $product->description = 'Beautiful Dark Green Dress';
        $product->quantity = 11;
        $product->image = '1703949125.png';
        $product->save();

        $product = new Product;
        $product->title = 'Gray Dress';
        $product->price = 139;
        $product->description = 'Beautiful Gray Dress';
        $product->quantity = 10;
        $product->image = '1703949193.png';
        $product->save();

        $product = new Product;
        $product->title = 'Light Blue Dress';
        $product->price = 249;
        $product->description = 'Light Blue Dress / 40-44';
        $product->quantity = 25;
        $product->image = '1703949226.png';
        $product->save();

        $product = new Product;
        $product->title = 'Purple Dress';
        $product->price = 129;
        $product->description = 'Beautiful Purple Dress';
        $product->quantity = 10;
        $product->image = '1703949261.png';
        $product->save();

        $product = new Product;
        $product->title = 'Pink Dress';
        $product->price = 199;
        $product->description = 'Beautiful Pink Dress';
        $product->quantity = 10;
        $product->image = '1703949303.png';
        $product->save();


    }
}
