<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = new Order;
        $order->name = fake()->name;
        $order->phone = '0485894859';
        $order->address = fake()->address;
        $order->product_name = 'Green Dress';
        $order->quantity = rand(0, 20);
        $order->price = rand(0, 299);
        $order->status = "Not delivered";
        $order->save();


        $order = new Order;
        $order->name = fake()->name;
        $order->phone = '049598598';
        $order->address = fake()->address;
        $order->product_name = 'Yellow Dress';
        $order->quantity = rand(0, 20);
        $order->price = rand(0, 299);
        $order->status = "Not delivered";
        $order->save();

        $order = new Order;
        $order->name = fake()->name;
        $order->phone = '049568980';
        $order->address = fake()->address;
        $order->product_name = 'White Dress';
        $order->quantity = rand(0, 20);
        $order->price = rand(0, 299);
        $order->status = "Not delivered";
        $order->save();

        $order = new Order;
        $order->name = fake()->name;
        $order->phone = '04950989085';
        $order->address = fake()->address;
        $order->product_name = 'Pink Dress';
        $order->quantity = rand(0, 20);
        $order->price = rand(0, 299);
        $order->status = "Not delivered";
        $order->save();

        $order = new Order;
        $order->name = fake()->name;
        $order->phone = '0485894859';
        $order->address = fake()->address;
        $order->product_name = 'Orange Dress';
        $order->quantity = rand(0, 20);
        $order->price = rand(0, 299);
        $order->status = "Not delivered";
        $order->save();
    }
}
